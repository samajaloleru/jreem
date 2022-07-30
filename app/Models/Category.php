<?php

namespace App\Models;

use App\Traits\UUID;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory, UUID;

    protected $fillable = ["name", "description"];

    /**
     * Get the products for the category post.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
