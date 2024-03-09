<?php

namespace App\Services;

use Exception;
use App\Enums\Ask;
use App\Models\User;
use App\Services\Tra;
use App\Enums\Role as EnumRole;
use App\Models\TransactionRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Services\TransactionService;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\PaginateRequest;
use App\Traits\DefaultAccessModelTrait;
use App\Http\Requests\EarnPointsRequest;
use App\Http\Requests\ChangeImageRequest;
use App\Http\Requests\UserChangePasswordRequest;

class CustomerService
{
    use DefaultAccessModelTrait;
    private TransactionService $transactionService;
    private $PLENTI_COMMISSION =  2;

    public object $user;
    public array $phoneFilter = ['phone'];
    public array $roleFilter = ['role_id'];
    public array $userFilter = ['name', 'email', 'username', 'branch_id', 'status', 'phone', 'customer_balance'];
    public array $blockRoles = [EnumRole::ADMIN];


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

            return User::with('media', 'addresses')->role(EnumRole::CUSTOMER)->where(function ($query) use ($requests) {
                foreach ($requests as $key => $request) {
                    if (in_array($key, $this->userFilter)) {
                        $query->where($key, 'like', '%' . $request . '%');
                    }
                }
            })->orderBy($orderColumn, $orderType)->$method(
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
    public function store(CustomerRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $this->user = User::create([
                    'name'              => $request->name,
                    'email'             => $request->email,
                    'phone'             => $request->phone,
                    'username'          => $this->username($request->email),
                    'password'          => bcrypt($request->password),
                    'branch_id'         => 0,
                    'email_verified_at' => now(),
                    'status'            => $request->status,
                    'country_code'      => $request->country_code,
                    'is_guest'          => Ask::NO,
                ]);
                $this->user->assignRole(EnumRole::CUSTOMER);
            });
            return $this->user;
        } catch (Exception $exception) {
            DB::rollBack();
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    /**
     * @throws Exception
     */
    public function update(CustomerRequest $request, User $customer)
    {
        try {
            if (!in_array(EnumRole::CUSTOMER, $this->blockRoles)) {
                DB::transaction(function () use ($customer, $request) {
                    $this->user               = $customer;
                    $this->user->name         = $request->name;
                    $this->user->email        = $request->email;
                    $this->user->phone        = $request->phone;
                    $this->user->status       = $request->status;
                    $this->user->country_code = $request->country_code;
                    if ($request->password) {
                        $this->user->password = Hash::make($request->password);
                    }
                    $this->user->save();
                });
                return $this->user;
            } else {
                throw new Exception(trans('all.message.permission_denied'), 422);
            }
        } catch (Exception $exception) {
            DB::rollBack();
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    /**
     * @throws Exception
     */
    public function show(User $customer): User
    {
        try {
            if (!in_array(EnumRole::CUSTOMER, $this->blockRoles)) {
                return $customer;
            } else {
                throw new Exception(trans('all.message.permission_denied'), 422);
            }
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    /**
     * @throws Exception
     */
    public function destroy(User $customer)
    {
        try {
            if (!in_array(EnumRole::CUSTOMER, $this->blockRoles) && $customer->id != 2) {
                if ($customer->hasRole(EnumRole::CUSTOMER)) {
                    DB::transaction(function () use ($customer) {
                        $customer->addresses()->delete();
                        $customer->delete();
                    });
                } else {
                    throw new Exception(trans('all.message.permission_denied'), 422);
                }
            } else {
                throw new Exception(trans('all.message.permission_denied'), 422);
            }
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            DB::rollBack();
            throw new Exception($exception->getMessage(), 422);
        }
    }

    private function username($email): string
    {
        $emails = explode('@', $email);
        return $emails[0] . mt_rand();
    }

    /**
     * @throws Exception
     */
    public function changePassword(UserChangePasswordRequest $request, User $customer): User
    {
        try {
            if (!in_array(EnumRole::CUSTOMER, $this->blockRoles)) {
                $customer->password = Hash::make($request->password);
                $customer->save();
                return $customer;
            } else {
                throw new Exception(trans('all.message.permission_denied'), 422);
            }
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    /**
     * @throws Exception
     */
    public function changeImage(ChangeImageRequest $request, User $customer): User
    {
        try {
            if (!in_array(EnumRole::CUSTOMER, $this->blockRoles)) {
                if ($request->image) {
                    $customer->clearMediaCollection('profile');
                    $customer->addMediaFromRequest('image')->toMediaCollection('profile');
                }
                return $customer;
            } else {
                throw new Exception(trans('all.message.permission_denied'), 422);
            }
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
            throw new Exception($exception->getMessage(), 422);
        }
    }

    public function earnBurnPoints($request, User $branch, int $pointsReceived ): User
    {
        $customer = User::where(['id' =>  $request->customer_id])->first();
        $this->user = $customer;
        $this->transactionService =  new TransactionService();

        DB::transaction(function () use ($customer, $request, $branch, $pointsReceived) {
            switch($request->transaction_type){
                case "earn" : {
                    $this->user->earn_point         = $customer->earn_point + $pointsReceived;
                    $this->user->total_transactions = $customer->total_transactions + 1;
                    $this->user->earn_amount        = $customer->earn_amount + $request->amount_spent;
                    $this->user->customer_balance   = $customer->customer_balance + $pointsReceived;
                    $this->user->total_amount_spent = $customer->total_amount_spent + $request->amount_spent;

                    $transactionRequest =  new TransactionRequest;
                    $transactionRequest->amount_spent       = $request->amount_spent;
                    $transactionRequest->amount             = $request->amount_spent;
                    $transactionRequest->ref                = $request->ref;
                    $transactionRequest->customer_id        = $customer->id;
                    $transactionRequest->payment_method     = $request->payment_method;
                    $transactionRequest->creds              = $pointsReceived;
                    $transactionRequest->commission         = $this->PLENTI_COMMISSION;
                    $transactionRequest->transaction_type   = $request->transaction_type;
                    $transactionRequest->branch             = $branch;
                    $this->transactionService->saveTransactionLog($transactionRequest);
                    break;
                }
                case "burn" : {
                    if($this->user->customer_balance > $pointsReceived){
                        $this->user->earn_point         =  $this->user->earn_point - $pointsReceived;
                        $this->user->burn_point         =  $this->user->burn_point + $pointsReceived;
                        $this->user->total_transactions =  $this->user->total_transactions + 1;
                        $this->user->earn_amount        =  $this->user->earn_amount - $request->amount_spent;
                        $this->user->burn_amount        = $this->user->burn_amount + $request->burn_amount;
                        $this->user->customer_balance   = $this->user->customer_balance - $pointsReceived;
                        $this->user->total_amount_spent = $this->user->total_amount_spent + $request->amount_spent;

                        $transactionRequest =  new TransactionRequest;
                        $transactionRequest->amount_spent       = $request->amount_spent;
                        $transactionRequest->amount             = $request->amount_spent;
                        $transactionRequest->ref                = $request->ref;
                        $transactionRequest->customer_id        = $customer->id;
                        $transactionRequest->payment_method     = $request->payment_method;
                        $transactionRequest->creds              = $pointsReceived;
                        $transactionRequest->commission         = $this->PLENTI_COMMISSION;
                        $transactionRequest->transaction_type   = $request->transaction_type;
                        $transactionRequest->branch             = $branch;
                        $this->transactionService->saveTransactionLog($transactionRequest);
                    }else{
                        throw new Exception(trans('all.message.insufficient_balance'), 422);
                    }
                    break;
                }
            }
            $this->user->save();
        });

        return $this->user;
    }

    public function earnPromoReward($request, User $branch): User
    {

        $customer = User::where(['id' =>  $request->customer_id])->first();
        $this->user = $customer;
        $this->transactionService =  new TransactionService();

        DB::transaction(function () use ($customer, $request, $branch) {
            switch($request->transaction_type){
                case "promo" : {
                    $this->user->total_transactions = $customer->total_transactions + 1;
                    $transactionRequest =  new TransactionRequest;
                    $transactionRequest->amount_spent       = 0;
                    $transactionRequest->ref                = $request->ref;
                    $transactionRequest->customer_id        = $customer->id;
                    $transactionRequest->payment_method     = $request->payment_method;
                    $transactionRequest->creds              = 0;
                    $transactionRequest->commission         = 0;
                    $transactionRequest->transaction_type   = $request->transaction_type;
                    $transactionRequest->branch             = $branch;
                    $transactionRequest->entry              = $request->entry;
                    $this->transactionService->saveTransactionLog($transactionRequest);
                    break;
                }
            }
            $this->user->save();
        });

        return $this->user;
    }

}
