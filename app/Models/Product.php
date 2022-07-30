<?php

namespace App\Models;
use App\Traits\UUID;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory, UUID;

    protected $fillable = ["category_id"];

    /**
     * Get the category that owns the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the productsize for the product.
     */
    public function productsize()
    {
        return $this->hasMany(Productsize::class);
    }
    
    /**
     * Get the productcolor for the product.
     */
    public function productcolor()
    {
        return $this->hasMany(Productcolor::class);
    }
    /**
     * Get the productimage for the product.
     */
    public function productimage()
    {
        return $this->hasMany(Productimage::class);
    }
}
