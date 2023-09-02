<?php

namespace App\Repositories;

use App\Http\Resources\SellerResource;
use App\Models\Seller;

class SellerRepository
{
    public function store(array $data)
    {
        $seller = Seller::create($data);

        return new SellerResource($seller);
    }

    public function getAll()
    {
        return SellerResource::collection(Seller::with('sales')->get());
    }

    public function update(Seller $seller, array $data)
    {
        $seller->update($data);

        return new SellerResource($seller);
    }

    public function destroy(Seller $seller)
    {
        $seller->delete();
    }
}
