<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class EarnBurnPointResource extends JsonResource
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
            "earn_amount"  => $this->earn_amount,
            "customer_balance"  => $this->customer_balance,       
        ];
    }
}
