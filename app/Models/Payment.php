<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    protected $guarded = ['id'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    use HasFactory;
}
