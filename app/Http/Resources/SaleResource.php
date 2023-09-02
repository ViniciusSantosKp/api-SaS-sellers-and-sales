<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->seller->name,
            'email' => $this->seller->email,
            'commission' => $this->commission,
            'value' => $this->value,
            'sale_date' => $this->created_at->format('Y-m-d'),
        ];
    }
}