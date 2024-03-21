<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EmailNSmsNotificationExport;
use Exception;
use App\Models\EmailNSms;
use App\Models\EmailNSmsUser;
use App\Services\EmailNSmsService;
use App\Http\Requests\EmailNSmsRequest;
use App\Http\Requests\EmailNSmsTempRequest;
use App\Http\Requests\PaginateRequest;
use App\Http\Resources\EmailNSmsNotificationResource;//
use App\Http\Resources\EmailNSmsUserNotificationResource;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class EmailNSmsController extends AdminController
{
    private EmailNSmsService $emailnsmsNotificationService;

    public function __construct(EmailNSmsService $emailnsmsNotificationService)
    {
        parent::__construct();
        $this->emailnsmsNotificationService = $emailnsmsNotificationService;
        $this->middleware(['permission:email_sms'])->only('index', 'export', 'index_user');
        $this->middleware(['permission:email_sms_create'])->only('store');
        $this->middleware(['permission:email_sms_delete'])->only('destroy');
        $this->middleware(['permission:email_sms_show'])->only('show');
    }

    public function index(PaginateRequest $request) : \Illuminate\Http\Response | \Illuminate\Http\Resources\Json\AnonymousResourceCollection | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return EmailNSmsNotificationResource::collection($this->emailnsmsNotificationService->list($request));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function index_user(PaginateRequest $request) : \Illuminate\Http\Response | \Illuminate\Http\Resources\Json\AnonymousResourceCollection | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return EmailNSmsUserNotificationResource::collection($this->emailnsmsNotificationService->list_users($request));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function store(EmailNSmsRequest $request) : \Illuminate\Http\Response | EmailNSmsNotificationResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return new EmailNSmsNotificationResource($this->emailnsmsNotificationService->store($request));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function sendMessage(EmailNSmsTempRequest $request) : \Illuminate\Http\Response | bool |  \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return $this->emailnsmsNotificationService->sendMessage($request);
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function show(EmailNSms $emailnsmsNotification) : \Illuminate\Http\Response | EmailNSmsNotificationResource | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            //Log::info("Email notif");
            Log::info($emailnsmsNotification);
            return new EmailNSmsNotificationResource($this->emailnsmsNotificationService->show($emailnsmsNotification));
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function destroy(EmailNSms $emailnsmsNotification) : \Illuminate\Http\Response | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    { 
        try {
            $this->emailnsmsNotificationService->destroy($emailnsmsNotification);
            return response('', 202);
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }

    public function export(PaginateRequest $request) : \Illuminate\Http\Response | \Symfony\Component\HttpFoundation\BinaryFileResponse | \Illuminate\Contracts\Foundation\Application | \Illuminate\Contracts\Routing\ResponseFactory
    {
        try {
            return Excel::download(new EmailNSmsNotificationExport($this->emailnsmsNotificationService, $request), 'Email-N-Sms.xlsx');
        } catch (Exception $exception) {
            return response(['status' => false, 'message' => $exception->getMessage()], 422);
        }
    }
}
