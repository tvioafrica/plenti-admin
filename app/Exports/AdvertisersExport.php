<?php

namespace App\Exports;


use App\Enums\Status;
use App\Services\AdvertisersService;
use App\Http\Requests\PaginateRequest;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdvertisersExport implements FromCollection, WithHeadings
{

    public AdvertisersService $deliveryBoyService;
    public PaginateRequest $request;

    public function __construct(AdvertisersService $deliveryBoyService, $request)
    {
        $this->deliveryBoyService = $deliveryBoyService;
        $this->request            = $request;
    }

    public function collection() : \Illuminate\Support\Collection
    {
        $deliveryBoyArray = [];
        $deliveryBoys     = $this->deliveryBoyService->list($this->request);

        foreach ($deliveryBoys as $deliveryBoy) {
            $deliveryBoyArray[] = [
                $deliveryBoy->name,
                $deliveryBoy->email,
                $deliveryBoy->country_code . '' . $deliveryBoy->phone,
                trans('statuse.' . $deliveryBoy->status),
            ];
        }
        return collect($deliveryBoyArray);
    }

    public function headings() : array
    {
        return [
            trans('all.label.name'),
            trans('all.label.email'),
            trans('all.label.phone'),
            trans('all.label.status')
        ];
    }
}
