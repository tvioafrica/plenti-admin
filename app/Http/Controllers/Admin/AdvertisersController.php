<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Services\OrderService;
use App\Exports\AdvertisersExport;
use App\Services\AdvertisersService;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\OrderResource;
use App\Http\Requests\PaginateRequest;
use App\Http\Requests\ChangeImageRequest;
use App\Http\Requests\DeliveryBoyRequest;
use App\Http\Resources\DeliveryBoyResource;
use App\Http\Requests\UserChangePasswordRequest;

class AdvertisersController extends AdminController
{
    private AdvertisersService $advertisersService;
    private OrderService $orderService;

    public function __construct(AdvertisersService $advertisersService, OrderService $orderService)
    {
        parent::__construct();
        $this->advertisersService = $advertisersService;
        $this->orderService = $orderService;
        $this->middleware(['permission:delivery-boys'])->only('index', 'export', 'changePassword', 'changeImage', 'myOrder');
        $this->middleware(['permission:delivery-boys_create'])->only('store');
        $this->middleware(['permission:delivery-boys_edit'])->only('update');
        $this->middleware(['permission:delivery-boys_delete'])->only('destroy');
        $this->middleware(['permission:delivery-boys_show'])->only('show');
    }

    public function index(PaginateRequest $request): \Illuminate\Http\Response | \Illuminate\Http\Resources\Json\AnonymousResourceCollection | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return DeliveryBoyResource::collection($this->advertisersService->list($request));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function store(DeliveryBoyRequest $request): \Illuminate\Http\Response | DeliveryBoyResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return new DeliveryBoyResource($this->advertisersService->store($request));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function update(DeliveryBoyRequest $request, User $advertisers): \Illuminate\Http\Response | DeliveryBoyResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return new DeliveryBoyResource($this->advertisersService->update($request, $advertisers));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function destroy(User $advertisers): \Illuminate\Http\Response | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            $this->advertisersService->destroy($advertisers);
            return response('', 202);
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function show(User $advertisers): \Illuminate\Http\Response | DeliveryBoyResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return new DeliveryBoyResource($this->advertisersService->show($advertisers));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function export(PaginateRequest $request): \Illuminate\Http\Response | \Symfony\Component\HttpFoundation\BinaryFileResponse | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return Excel::download(new AdvertisersExport($this->advertisersService, $request), 'Delivery-Boy.xlsx');
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function changePassword(UserChangePasswordRequest $request, User $deliveryBoy): \Illuminate\Http\Response | DeliveryBoyResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return new DeliveryBoyResource($this->advertisersService->changePassword($request, $deliveryBoy));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function changeImage(ChangeImageRequest $request, User $advertisers): \Illuminate\Http\Response | DeliveryBoyResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return new DeliveryBoyResource($this->advertisersService->changeImage($request, $advertisers));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function myOrder(PaginateRequest $request, User $advertisers) : \Illuminate\Http\Response | \Illuminate\Http\Resources\Json\AnonymousResourceCollection | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return OrderResource::collection($this->orderService->userOrder($request, $advertisers));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }
}
