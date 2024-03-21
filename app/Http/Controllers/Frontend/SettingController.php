<?php

namespace App\Http\Controllers\Frontend;


use Exception;
use App\Services\SettingService;
use App\Http\Controllers\Controller;
use App\Services\DeliveryBoyService;
use App\Http\Requests\PaginateRequest;
use App\Http\Resources\SettingResource;
use App\Http\Resources\DeliveryBoyResource;

class SettingController extends Controller
{
    private SettingService $settingService;
    private DeliveryBoyService $deliveryBoyService;

    public function __construct(DeliveryBoyService $deliveryBoyService, SettingService $settingService)
    {
        $this->settingService = $settingService;
        $this->deliveryBoyService = $deliveryBoyService;
    }

    public function index() : \Illuminate\Http\Response | SettingResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return new SettingResource($this->settingService->list());
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }


    public function operators(PaginateRequest $request): \Illuminate\Http\Response | \Illuminate\Http\Resources\Json\AnonymousResourceCollection | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return DeliveryBoyResource::collection($this->deliveryBoyService->operators($request));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }
}
