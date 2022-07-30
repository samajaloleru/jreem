<?php

namespace App\Models;
use App\Traits\UUID;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productcolor extends Model
{
    use HasFactory, UUID;

    protected $fillable = ["product_id","name","hex_code"];

    /**
     * Get the product that owns the productcolor.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
