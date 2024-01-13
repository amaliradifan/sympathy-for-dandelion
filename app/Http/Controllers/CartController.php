<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $validateData = $request-> validate([
            'user_id'=>'required',
            'produks_id'=>'required',
            'Quantity'=>'required',
            'TotalCost'=>'required',
        ]);
        Chart::create($validateData);

        return redirect('/payment')->with('success', 'AddCart added successfully.');
    }
    
}
