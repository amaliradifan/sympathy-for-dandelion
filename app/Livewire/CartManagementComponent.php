<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartManagementComponent extends Component
{
    public $cartItems;
    public $total;
    public $quantities = [];

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        $this->cartItems = Cart::where('user_id', Auth::id())->get();
        $this->quantities = $this->cartItems->pluck('quantity', 'id')->toArray();
        $this->calculateTotal();
    }

    public function addProduct($productId, $size)
    {
        $user = Auth::id();
        $product = Product::find($productId);
        $price = $product->price;

        $cart = Cart::where('user_id', $user)
            ->where('product_id', $productId)
            ->where('size', $size)
            ->first();

        if ($cart) {
            $cart->update([
                'quantity' => $cart->quantity + 1,
                'total_costs' => $cart->total_costs + $price
            ]);
        } else {
            Cart::create([
                'user_id' => $user,
                'product_id' => $productId,
                'size' => $size,
                'quantity' => 1,
                'total_costs' => $price,
            ]);
        }

        $this->loadCart();
    }

    public function removeProduct($productId, $size)
    {
        $user = Auth::id();
        $cart = Cart::where('user_id', $user)
            ->where('product_id', $productId)
            ->where('size', $size)
            ->first();

        if ($cart) {
            if ($cart->quantity > 1) {
                $cart->update([
                    'quantity' => $cart->quantity - 1,
                    'total_costs' => $cart->total_costs - $cart->product->price
                ]);
            } else {
                $cart->delete();
            }
        }

        $this->loadCart();
    }

    public function updateQuantity($cartId)
    {
        $cart = Cart::find($cartId);
        if ($cart) {
            $cart->update([
                'quantity' => $this->quantities[$cartId],
                'total_costs' => $cart->product->price * $this->quantities[$cartId]
            ]);
        }

        $this->loadCart();
    }

    public function calculateTotal()
    {
        $this->total = $this->cartItems->sum('total_costs');
    }

    public function render()
    {
        return view('livewire.cart-management-component', [
            'cartItems' => $this->cartItems,
            'total' => $this->total,
        ]);
    }
}
