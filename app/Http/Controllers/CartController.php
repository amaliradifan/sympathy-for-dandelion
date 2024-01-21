<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
            'size' => 'required',
            'quantity' => 'required',
            'total_costs' => 'required',
        ]);

        $user = $request->user_id;
        $product = $request->product_id;
        $size = $request->size;
        $price = Product::where('id', $product)->value('price');

        $cart = Cart::where('user_id', $user)
            ->where('product_id', $product)
            ->where('size', $size)
            ->first();

        if ($cart) {
            $cart->update([
                'total_costs' => $cart->total_costs + $price,
                'quantity' => $cart->quantity + 1
            ]);
            return back()->with('success', "Product successfully added to your cart");
        }

        Cart::create($validateData);

        return redirect('/')->with('success', 'Cart added successfully.');
    }
}
