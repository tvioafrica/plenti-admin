<?php

namespace App\Services;


use Exception;
use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Enums\EmailType;
use App\Models\EmailNSms;
use App\Models\EmailNSmsUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\PaginateRequest;
use App\Http\Requests\EmailNSmsRequest;
use App\Http\Requests\EmailNSmsTempRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\messageTemplateMail;

class EmailNSmsService
{
    public object $emailSmsNotification;
    protected array $emailSmsNotificationFilter = [
        'title',
        'content',
        'type_of'
    ];

    protected array $emailSmsUserNotificationFilter = [
        'user_id',
        'email_sms_id'
    ];

    /**
     * @throws Exception
     */
    public function list(PaginateRequest $request)
    { 
        try {
            $requests    = $request->all();
            $method      = $request->get('paginate', 0) == 1 ? 'paginate' : 'get';
            $methodValue = $request->get('paginate', 0) == 1 ? $request->get('per_page', 10) : '*';
            $orderColumn = $request->get('order_column') ?? 'id';
            $orderType   = $request->get('order_type') ?? 'desc';

            $query = EmailNSms::query();

            foreach ($requests as $key => $request) {
                if (in_array($key, $this->emailSmsNotificationFilter)) {
                    $query->where($key, 'like', '%' . $request . '%');
                }
            }

            return $query->orderBy($orderColumn, $orderType)->$method(
                $methodValue
            );

        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    public function list_users(PaginateRequest $request)
    { 
        try {
            $requests    = $request->all();
            $method      = $request->get('paginate', 0) == 1 ? 'paginate' : 'get';
            $methodValue = $request->get('paginate', 0) == 1 ? $request->get('per_page', 10) : '*';
            $orderColumn = $request->get('order_column') ?? 'id';
            $orderType   = $request->get('order_type') ?? 'desc';

            $query = EmailNSmsUser::with('email_sms')->with('user');

            foreach ($requests as $key => $request) {
                if (in_array($key, $this->emailSmsUserNotificationFilter)) {
                    $query->where($key, '=', $request );
                }
            }

            return $query->orderBy($orderColumn, $orderType)->$method(
                $methodValue
            );

        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    /**
     * @throws Exception
     */
    public function store(EmailNSmsRequest $request) : EmailNSms
    {
        try {
            $emailSmsNotification              = new EmailNSms();
            $emailSmsNotification->title       = $request->title;
            $emailSmsNotification->content     = strip_tags($request->content);
            $emailSmsNotification->type_of     = $request->type_of;
            $emailSmsNotification->branch_id   = $request->branch_id ?? null;
            $emailSmsNotification->recipients  = $request->recipients ?? null;
            $emailSmsNotification->save();

            return $emailSmsNotification;
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    /**
     * @throws Exception
     */
    public function sendMessage(EmailNSmsTempRequest $request) : bool
    {
        try {
          $rec         = $request->recipients;
          $template_id = $request->email_template_id;
          
          $rec_array = json_decode($rec);
          Log::info($rec_array);

          $chunkedArrays = array_chunk($rec_array, 50 , true);

          $email_sms = EmailNSms::where('id', $template_id)->first();

          if ($email_sms){

            if ( $email_sms["type_of"] == EmailType::EMAIL ){
                foreach ($chunkedArrays as $chunk) {
                    for ($i = 0; $i < count($chunk); $i++){
                        $user = User::where('id', $chunk[$i]->id)->first();
                        $response = $this->sendEmailNSmsNotification( 
                        array( 
                            "type_of" => EmailType::EMAIL, 
                            "title"   => $email_sms->title, 
                            "content" => $email_sms->content, 
                            "email"   => $user->email 
                        ));
                        $emailSmsUser = new EmailNSmsUser();
                        $emailSmsUser->email_sms_id = $email_sms->id;
                        $emailSmsUser->user_id      = $user->id;
                        $emailSmsUser->status       = $response;
                        $emailSmsUser->save();
                        sleep(2);
                    }                   
                    sleep(10);
                }
            }
            else if ($email_sms["type_of"] == EmailType::SMS){
                foreach ($chunkedArrays as $chunk) {
                    for ($i = 0; $i < count($chunk); $i++){
                        $user = User::where('id', $chunk[$i]->id)->first();
                        $response = $this->sendEmailNSmsNotification( 
                        array( 
                            "type_of" => EmailType::SMS,  
                            "content" => $email_sms->content, 
                            "phone"   => $user->phone 
                        ));
                        $emailSmsUser = new EmailNSmsUser();
                        $emailSmsUser->email_sms_id = $email_sms->id;
                        $emailSmsUser->user_id      = $user->id;
                        $emailSmsUser->status       = $response;
                        $emailSmsUser->save();
                        sleep(2);
                    }                   
                    sleep(10);
                }
            }
            return true;            
          }
          else{
            return false; 
          }         

        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
            return false; 
        }
    }

    /**
     * @throws Exception
     */
    public function show(EmailNSms $emailSmsNotification) : EmailNSms
    {
        try { 
            return $emailSmsNotification;
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    /**
     * @throws Exception
     */
    public function destroy(EmailNSms $emailSmsNotification)
    {
        try {
            DB::transaction(function () use ($emailSmsNotification) {
                $emailSmsNotification->delete();
            });
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            DB::rollBack();
            throw new Exception($exception->getMessage(), 422);
        }
    }

    private function sendEmailNSmsNotification($data) : Exception | string
    {
        //{ type_of, phone, content } if this is an SMS
        //{ type_of, title, content, email } if this is an EMail

        if ($data["type_of"] === EmailType::SMS){
            $url = 'https://api.ng.termii.com/api/sms/send';

            //to be changed
            $final = array( 
                "api_key" => ENV('TERMII_KEY'),
                "to" => $str = "234".ltrim($data["phone"], "0"),
                "from" => "N-Alert",
                "channel" => "dnd",
                "sms" => $data["content"],
                "type" => "plain"
            );         
    
            try {
                $result1 = json_decode(
                    Http::withHeaders([
                    'Content-type' => 'application/json'
                ])
                ->withOptions(['verify' => false])
                ->post(  $url, $final ));
                return json_encode($result1);
            } catch (Exception $e) {
                return $e;
            }
        }

        else if ($data["type_of"] === EmailType::EMAIL){
            try {
                $details = [
                    'title' => $data["title"],
                    'content' => $data["content"] 
                ];
                
                return json_encode( Mail::to($data["email"])->send(new messageTemplateMail($details)) );
            } catch (Exception $e) {
                return $e;
            }
        }

    }
}
