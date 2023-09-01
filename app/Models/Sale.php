<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'sales';

    protected $fillable = [
        'id',
        'seller_id',
        'commission',
        'value',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

}
