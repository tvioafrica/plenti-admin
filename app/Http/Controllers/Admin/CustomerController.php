<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Services\OrderService;
use App\Exports\CustomerExport;
use App\Services\CustomerService;
use App\Http\Resources\UserResource;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\OrderResource;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\PaginateRequest;
use App\Http\Requests\EarnPointsRequest;
use App\Http\Resources\CustomerResource;
use App\Http\Requests\ChangeImageRequest;
use App\Http\Resources\EarnBurnPointResource;
use App\Http\Requests\UserChangePasswordRequest;
use App\Traits\DefaultAccessModelTrait;

class CustomerController extends AdminController
{
    use DefaultAccessModelTrait;
    private CustomerService $customerService;
    private OrderService $orderService;

    public function __construct(CustomerService $customerService, OrderService $orderService)
    {
        parent::__construct();
        $this->customerService = $customerService;
        $this->orderService    = $orderService;
        $this->middleware(['permission:customers'])->only(
            'index',
            'export',
            'changePassword',
            'changeImage',
            'myOrder'
        );
        $this->middleware(['permission:customers_create'])->only('store');
        $this->middleware(['permission:customers_edit'])->only('update');
        $this->middleware(['permission:customers_delete'])->only('destroy');
        $this->middleware(['permission:customers_show'])->only('show');
    }

    public function index(PaginateRequest $request
    ) : \Illuminate\Http\Response | \Illuminate\Http\Resources\Json\AnonymousResourceCollection | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            return CustomerResource::collection($this->customerService->list($request));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function store(CustomerRequest $request
    ) : \Illuminate\Http\Response | CustomerResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            return new CustomerResource($this->customerService->store($request));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function update(
        CustomerRequest $request,
        User $customer
    ) : \Illuminate\Http\Response | CustomerResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            return new CustomerResource($this->customerService->update($request, $customer));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function destroy(User $customer
    ) : \Illuminate\Http\Response | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            $this->customerService->destroy($customer);
            return response('', 202);
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function show(User $customer
    ) : \Illuminate\Http\Response | CustomerResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            return new CustomerResource($this->customerService->show($customer));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }


    public function export(PaginateRequest $request
    ) : \Illuminate\Http\Response | \Symfony\Component\HttpFoundation\BinaryFileResponse | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            return Excel::download(new CustomerExport($this->customerService, $request), 'Customer.xlsx');
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function changePassword(
        UserChangePasswordRequest $request,
        User $customer
    ) : \Illuminate\Http\Response | CustomerResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            return new CustomerResource($this->customerService->changePassword($request, $customer));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function changeImage(
        ChangeImageRequest $request,
        User $customer
    ) : \Illuminate\Http\Response | CustomerResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            return new CustomerResource($this->customerService->changeImage($request, $customer));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function myOrder(
        PaginateRequest $request,
        User $customer
    ) : \Illuminate\Http\Response | \Illuminate\Http\Resources\Json\AnonymousResourceCollection | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            return OrderResource::collection($this->orderService->userOrder($request, $customer));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function earnBurnPoints(
        EarnPointsRequest $request,
        User $branch
    ) : \Illuminate\Http\Response | EarnBurnPointResource  | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            $pointsReceived  = $this->pointEngine($branch, $request->amount_spent, $request->transaction_type);
            $userData = $this->customerService->earnBurnPoints($request, $branch,$pointsReceived);
            if(!is_null($userData->id)){
                return response([
                    'status' => true,
                    'message' =>"Your transaction was successful you just " .$request->transaction_type . " ". $pointsReceived. " points" ,
                    'data' => new UserResource($userData)
                ], 201);
           }else{
                return response(['status' => false, 'message' => "User does not exit"], 422);
           }

        } catch (Exception $exception) {
            return response(['status' => false, 'message' =>$exception->getMessage()], 422);
        }
    }

    public function earnPromoReward(
        EarnPointsRequest $request,
        User $branch
    ) : \Illuminate\Http\Response | EarnBurnPointResource  | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory {
        try {
            $userData = $this->customerService->earnPromoReward($request, $branch);
            if(!is_null( $userData->id)){
                return response([
                    'status' => true,
                    'message' =>"Promo Claimed successfully",
                    'data' => new UserResource($userData)
                ], 201);
            }else{
                return response(['status' => false, 'message' => "User does not exit"], 422);
            }
        } catch (Exception $exception) {
            return response(['status' => false, 'message' =>$exception->getMessage()], 422);
        }
    }

}
