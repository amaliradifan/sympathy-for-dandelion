<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    
    public function products()
    {
        return $this->hasMany(Produk::class);
    }

    use HasFactory;
}
