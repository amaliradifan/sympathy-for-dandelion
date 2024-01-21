<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        return view('cart.index', [
            'carts' => $carts
        ]);
    }

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

        return back()->with('success', "Product successfully added to your cart");
    }

    public function updateCart(Request $request)
    {
        $request->validate([
            'quantity' => 'required|numeric|max:99|min:1',
        ]);
        $cart = Cart::find($request->cart_id);
        $price = $cart->product->price;
        $cart->update([
            'quantity' => $request->quantity,
            'total_costs' => $request->quantity * $price
        ]);

        return redirect('/cart');
    }


    public function deleteCart(Cart $cart)
    {
        $cart->delete();

        return redirect()->back()->with('successDelete', "Item has been removed from your cart.");
    }
}
