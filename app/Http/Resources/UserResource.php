<?php

namespace App\Http\Resources;

use App\Libraries\AppLibrary;
use App\Http\Resources\RoleResource;
use App\Traits\DefaultAccessModelTrait;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    use DefaultAccessModelTrait;
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            "id"               => $this->id,
            "name"             => $this->name,
            "first_name"       => $this->FirstName,
            "last_name"        => $this->LastName,
            "phone"            => $this->phone,
            "email"            => $this->email,
            "gender"            => $this->gender,
            'username'         => $this->username,
            "balance"          => ($this->balance == 0) ? $this->customer_balance : $this->balance,
            "naira_balance"    => $this->covertToNaira($this->customer_balance),
            "currency_balance" => AppLibrary::currencyAmountFormat(($this->balance == 0) ? $this->customer_balance : $this->balance),
            "image"            => $this->image,
            "role_id"          => $this->myRole,
            "role"             => new RoleResource($this->whenLoaded('role')),
            "country_code"     => $this->country_code,
            "order"            => $this->orders->count(),
            'create_date'      => AppLibrary::date($this->created_at),
            'update_date'      => AppLibrary::date($this->updated_at),

        ];
    }
}
