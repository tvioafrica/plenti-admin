<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Http\Requests\VtuRequest;
use App\Services\CustomerService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\EarnBurnPointResource;

class BillController extends AdminController
{

    private CustomerService $customerService;
    private $TERMINALID =  "3PTA0001";
    private $SEND_INTERSWITCH_PAYMENT_BILL = "https://orion.interswitchng.com/quicktellerservice/api/v5/Transactions";
    private $SEND_INTERSWITCH_TOKEN = "https://passport.interswitchng.com/passport/oauth/token";

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function airtimeOperators()
    {
        $airTimePlans = DB::table('airtime_options_quickteller')->get()->toArray();
        return response(['status' =>'success', 'data' =>$airTimePlans]);
    }

    public function dataOperators()
    {
        $dataPlans = DB::table('data_options_quickteller')->get()->toArray();
        return response(['status' =>'success', 'data' =>$dataPlans]);
    }

    public function buyAirtime(
        VtuRequest $request,
        User $customer
    ) : \Illuminate\Http\Response | EarnBurnPointResource  | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            $user = User::where('id', auth()->user()->id)->first();
            if ($user ) {
                $mobile = $request->mobile;
                $network = $request->network;
                $paymentcode = $request->paymentcode;
                $amount = $request->amount_spent;

                $uniqueCode = "Airtime" . "-" . str_replace('-', "", date('Y-m-d')) . "-" . time() . "-";
                $mydata = json_encode(array(
                    "TerminalID" => $this->TERMINALID , "paymentCode" => $paymentcode, "customerId" => $mobile,
                    "customerMobile" =>  $mobile, "customerEmail" => $user->email, "amount" => ($amount * 100), "requestReference" => ""
                ));
               // $response = Http::get('http://example.com');
               $token_data =  json_decode(
                    Http::withHeaders([
                    'Authorization' => "Basic ".env('QUICKTELLER_PASSPORT')
                ])
                ->asForm()
                ->withOptions(['verify' => false])
                ->post( $this->SEND_INTERSWITCH_TOKEN, [
                     "grant_type"=>"client_credentials"
                ]));

                sleep(1);

                $result1 = json_decode(
                    Http::withHeaders([
                    'Content-type' => 'application/json',
                    'TerminalID' => $this->TERMINALID,
                    'Authorization' => "Bearer ".$token_data->access_token
                ])
                ->withOptions(['verify' => false])
                ->post(  $this->SEND_INTERSWITCH_PAYMENT_BILL, [
                    "TerminalID" => $this->TERMINALID , "paymentCode" => $paymentcode, "customerId" => $mobile,
                    "customerMobile" =>  $mobile, "customerEmail" => $user->email, "amount" => ($amount * 100), "requestReference" =>  ""
                ] ));
                sleep(2);

                if (isset($result1->ResponseCode) && $result1->ResponseCode != "90000") {
                    return response(['status' => false, 'message' => "Transaction failed, Kindly try again please"],442);
                }
                else if ( isset($result1->ResponseCode) && $result1->ResponseCode == "90000" ) {
                    return new EarnBurnPointResource($this->customerService->EarnBurnPoints($request, $customer,  auth()->user()->id));
                }
            } else {
                return response(['status' => false, 'message' => "Transaction failed, Kindly try again please"],442);

            }
        }catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    public function buyData(
        VtuRequest $request,
        User $customer
        ) : \Illuminate\Http\Response | EarnBurnPointResource  | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory    {
        try {
            $user = User::where('id', auth()->user()->id)->first();
            if ($user ) {
                $mobile = $request->mobile;
                $paymentcode = $request->paymentcode;
                $amount = $request->amount_spent;
                $uniqueCode = "Databundle" . "-" . str_replace('-', "", date('Y-m-d')) . "-" . time();
                $token_data =  json_decode(
                    Http::withHeaders([
                    'Authorization' => "Basic ".env('QUICKTELLER_PASSPORT')
                ])
                ->asForm()
                ->withOptions(['verify' => false])
                ->post( $this->SEND_INTERSWITCH_TOKEN, [
                     "grant_type"=>"client_credentials"
                ]));

                sleep(1);

                $result = json_decode(
                    Http::withHeaders([
                    'Content-type' => 'application/json',
                    'TerminalID' => $this->TERMINALID,
                    'Authorization' => "Bearer ".$token_data->access_token
                ])
                ->withOptions(['verify' => false])
                ->post(  $this->SEND_INTERSWITCH_PAYMENT_BILL, [
                    "TerminalID" => $this->TERMINALID , "paymentCode" => $paymentcode, "customerId" => $mobile,
                    "customerMobile" =>  $mobile, "customerEmail" => $user->email, "amount" => ($amount * 100), "requestReference" => ""
                ] ));

                sleep(2);

                if (isset($result->ResponseCode) && $result->ResponseCode != "90000") {
                    return response(['status' => false, 'message' => "Transaction failed, Kindly try again please"],442);
                }
                else if ( isset($result->ResponseCode) && $result->ResponseCode == "90000" ) {
                    return new EarnBurnPointResource($this->customerService->EarnBurnPoints($request, $customer,  auth()->user()->id));
                }
            } else {
                return response(['status' => false, 'message' => "Transaction failed, Kindly try again please"],442);
            }
        }catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

}
