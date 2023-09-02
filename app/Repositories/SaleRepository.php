<?php

namespace App\Repositories;

use App\Actions\CalculateSellerCommissionAction;
use App\Http\Resources\SaleResource;
use App\Models\Sale;
use App\Models\Seller;
use Illuminate\Support\Arr;

class SaleRepository
{
    public function store(array $data)
    {
        $sale = new Sale();
        $sale->value = Arr::get($data, 'value');
        $sale->commission = (new CalculateSellerCommissionAction)($sale->value);
        $sale->seller_id = Arr::get($data,'seller');

        $sale->save();

        return new SaleResource($sale);
    }

    public function getAll()
    {
        return SaleResource::collection(Sale::with('seller')->get());
    }

    public function getAllBySellerId(Seller $seller)
    {
        return SaleResource::collection($seller->sales);
    }

    public function update(Sale $sale, array $data)
    {
        $sale->update($data);

        return new SaleResource($sale);
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
    }
}
