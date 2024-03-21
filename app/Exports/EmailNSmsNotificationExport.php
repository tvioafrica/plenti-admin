<?php

namespace App\Exports;


use App\Http\Requests\PaginateRequest;
use App\Services\PushNotificationService;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Enums\EmailType;

class EmailNSmsNotificationExport implements FromCollection, WithHeadings
{
    public EmailNSmsService $emailNSmsNotificationService;
    public PaginateRequest $request;

    public function __construct(EmailNSmsService $emailNSmsNotificationService, $request)
    {
        $this->emailNSmsNotificationService = $emailNSmsNotificationService;
        $this->request                      = $request;
    }

    public function collection(
    ) : \Vanilla\Support\Collection | \IlluminateAgnostic\Str\Support\Collection | \IlluminateAgnostic\StrAgnostic\Str\Support\Collection | \IlluminateAgnostic\Collection\Support\Collection | \IlluminateAgnostic\ArrAgnostic\Arr\Support\Collection | \Illuminate\Support\Collection | \IlluminateAgnostic\Arr\Support\Collection
    {
        $emailNSmsNotificationArray = [];
        $emailNSmsNotifications     = $this->emailNSmsNotificationService->list($this->request);

        foreach ($emailNSmsNotifications as $emailNSmsNotification) {
            $emailNSmsNotificationArray[] = [
                $emailNSmsNotification->title,   
                $emailNSmsNotification->content,
                $emailNSmsNotification->type_of === EmailType::SMS ? "SMS" : "E-MAIL"
            ];
        }
        return collect($emailNSmsNotificationArray);
    }

    public function headings() : array
    {
        return [
            "Title",
            "Content",
            "Type of Mail"
        ];
    }
}
