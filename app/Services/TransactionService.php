<?php

namespace App\Services;

use App\Enums\Role;
use Exception;
use App\Models\User;
use App\Models\Transaction;
use App\Models\TransactionRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\PaginateRequest;
use Illuminate\Support\Facades\Auth;

class TransactionService
{
    private $DEFAULT_PAYMENT_METHOD = "POS";
    protected array $transactionFilter = [
        'transaction_no',
        'payment_method',
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



            return Transaction::with('stores', 'customer','order')->where(function ($query) use ($requests) {

                if ( Auth::user()->myrole == Role::ADVERTISER) {
                        $query->where(['type' => "promo"]);
                }
  /*
                if (isset($requests['order_serial_no'])) {
                    $query->whereHas('order', function ($query) use ($requests) {
                        $query->where(['order_serial_no' => $requests['order_serial_no']]);
                    });
                }

                if (isset($requests['from_date']) && isset($requests['to_date'])) {
                    $first_date = date('Y-m-d', strtotime($requests['from_date']));
                    $last_date  = date('Y-m-d', strtotime($requests['to_date']));
                    $query->whereDate('created_at', '>=', $first_date)->whereDate(
                        'created_at',
                        '<=',
                        $last_date
                    );
                }
                foreach ($requests as $key => $request) {
                    if (in_array($key, $this->transactionFilter)) {
                        $query->where($key, 'like', '%' . $request . '%');
                    }
                } */
            })->orderBy($orderColumn, $orderType)->$method(
                $methodValue
            );
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }


    public function saveTransactionLog(
        TransactionRequest $transactionRequest
        )
    {

        $itemData = array(
            "items"=>$transactionRequest->entry,
            "total"=> count($transactionRequest->entry)
        );
        switch($transactionRequest->transaction_type){
            case "promo" : {
                $transaction                    = new Transaction;

                $transaction->transaction_no    = time();
                $transaction->amount_spent      = $transactionRequest->amount_spent;
                $transaction->amount            = $transactionRequest->amount_spent;
                $transaction->type              = $transactionRequest->transaction_type;;
                $transaction->ref               = $transactionRequest->ref;
                $transaction->commission        = $transactionRequest->commission;
                $transaction->customer_id       = $transactionRequest->customer_id;
                $transaction->creds             = $transactionRequest->creds;
                $transaction->branch_id         = $transactionRequest->branch->id;
                $transaction->merchant_id       = $transactionRequest->branch->id;
                $transaction->store_id          = $transactionRequest->branch->id;
                $transaction->transaction       = $transactionRequest->transaction_type;
                $transaction->receipt           = time();
                $transaction->entry             = json_encode($transactionRequest->entry);
                $transaction->entry_json        = json_encode($itemData);
                $transaction->save();
                break;
            }
            default :{
                $transaction                    = new Transaction;
                $transaction->transaction_no    = time();
                $transaction->amount_spent      = $transactionRequest->amount_spent;
                $transaction->amount            = $transactionRequest->amount_spent;
                $transaction->type              = $transactionRequest->transaction_type;;
                $transaction->ref               = $transactionRequest->ref;
                $transaction->commission        = $transactionRequest->commission;
                $transaction->customer_id       = $transactionRequest->customer_id;
                $transaction->creds             = $transactionRequest->creds;
                $transaction->branch_id         = $transactionRequest->branch->id;
                $transaction->merchant_id       = $transactionRequest->branch->id;
                $transaction->store_id          = $transactionRequest->branch->id;
                $transaction->transaction       = $transactionRequest->transaction_type;
                $transaction->receipt           = time();
                $transaction->entry             = $this->transactionMessage($transactionRequest);
                $transaction->save();
                break;
            }
        }

        return true;
    }

    public function transactionMessage(TransactionRequest $transactionRequest){
        switch($transactionRequest->transaction_type){
            case "earn" :{
                return 'Points accumulated from Purchase done @'
                .$transactionRequest->branch->username. ' (Amount spent: ' . $transactionRequest->amount_spent . ')';
                break;
            }
            case "burn" : {
                return 'Points deducted from Purchase done  @'.
                $transactionRequest->branch->username. ' (Amount spent: ' . $transactionRequest->amount_spent. ')';
                break;
            }
            case "airtime" : {
                return 'Points accumulated from buying  Data $dataplan (Amount spent: ' .
                $transactionRequest->amount_spent . ')';
                break;
            }
            case "data" :  {
                return 'Points accumulated from buying ' . $transactionRequest->ref . ' Data $dataplan (Amount spent: ' .
                $transactionRequest->amount_spent. ')';
                break;
            }
        }
    }
}
