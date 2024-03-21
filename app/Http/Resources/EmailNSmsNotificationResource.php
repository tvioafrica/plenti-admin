<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class EmailNSmsNotificationResource extends JsonResource
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
            'id'          => $this->id,
            'title'       => $this->title,
            'content'     => strip_tags($this->content),
           
            'recipients'  => $this->recipients,
            'type_of'     => $this->type_of,
            'branch_id'   => $this->branch_id,
            'created_at'  => $this->created_at
        ];
    }
}
