<?php

namespace App\Http\Resources;


use App\Libraries\AppLibrary;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'id'              => $this->id,
            'order_id'        => $this->order_id,
            'order_serial_no' => $this->order?->order_serial_no,
            'transaction_no'  => $this->transaction_no,
            'amount'          => ($this->amount != null) ? AppLibrary::flatAmountFormat($this->amount) : number_format($this->amount_spent, 3, ".", ","),
            'payment_method'  => ($this->payment_method != '') ? strtoupper($this->payment_method) : strtoupper($this->ref),
            'commission'      => $this->commission,
            'creds'           => number_format($this->creds, 3, ".", ","),
            'transaction'     => $this->transaction,
            'type'            => $this->type,
            'sign'            => $this->sign,
            'date'            => AppLibrary::datetime($this->created_at)
        ];
    }
}
