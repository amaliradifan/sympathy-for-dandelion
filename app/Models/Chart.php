<?php

namespace App\Models;

use App\Models\User;
use App\Models\Produk;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chart extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produk()
    {
        return $this->belongsToMany(Produk::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    use HasFactory;
}
