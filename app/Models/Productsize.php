<?php

namespace App\Models;
use App\Traits\UUID;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productsize extends Model
{
    use HasFactory, UUID;

    protected $fillable = ["product_id","name"];

    /**
     * Get the product that owns the productsize.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
