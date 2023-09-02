<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSellerRequest;
use App\Repositories\SellerRepository;

class SellerController extends Controller
{
    public function __construct(protected SellerRepository $sellerRepository)
    {
    }

    public function store(StoreSellerRequest $request)
    {
        try {
            $data = $request->validated();

            return $this->sellerRepository->store($data);

        } catch (\Exception $e) {
            logger()->error('SellerController@store - error', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'payload' => $request->all(),
            ]);

            return response()->json(['error' => 'An error occurred while saving the seller.'], 500);
        }
    }

    public function show()
    {
        try {
            return $this->sellerRepository->getAll();

        } catch (\Exception $e) {
            logger()->error('SellerController@show - error', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
            ]);

            return response()->json(['error' => 'An error occurred while retrieving sellers.'], 500);
        }
    }
}
