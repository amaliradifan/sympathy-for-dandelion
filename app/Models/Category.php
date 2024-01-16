<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    use HasFactory;
}
