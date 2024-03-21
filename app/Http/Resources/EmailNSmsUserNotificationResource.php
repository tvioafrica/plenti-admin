<?php

namespace App\Http\Resources;

use App\Http\Resources\UserResource;
use App\Http\Resources\EmailNSmsNotificationResource;
use Illuminate\Http\Resources\Json\JsonResource;

class EmailNSmsUserNotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id'            => $this->id,
            'status'        => $this->status,
            'email_sms'     => new EmailNSmsNotificationResource($this->whenLoaded('email_sms')),
            'user'          => new UserResource($this->whenLoaded('user')),
        ];
    }
}
