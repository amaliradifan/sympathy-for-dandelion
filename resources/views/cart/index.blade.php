@extends('layouts.main')
@section('container')
    <div class="grid justify-items-center" style="min-height: 55vh">
        @if ($carts->count() === 0)
            <div>
                <h1 class="text-center font-bold text-4xl mt-14">Your Cart</h1>
                <h1 class="text-center font-semibold text-2xl mt-14">Time to fill up your cart with amazing products! <a
                        href="/products" class="text-warning hover:underline">Browse
                        and shop now!</a></h1>
            </div>
        @else
            <div class="w-5/6">
                <h1 class="text-center font-bold text-4xl">Your Cart</h1>
                <div class="grid justify-items-center">
                    @if (session()->has('successDelete'))
                        <div role="alert" id="alert" class="alert shadow-lg w-5/6 my-10">
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 text-warning"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <h3 class="font-bold">{{ session('successDelete') }}</h3>
                            </div>
                            <button onclick="closeDiv()" class="btn btn-square btn-sm bg-transparent border-none"><svg
                                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="grid grid-cols-5 text-center mt-10">
                    <div class="col-span-2"></div>
                    <h3 class="text-xl font-semibold">Price</h3>
                    <h3 class="text-xl font-semibold">Quantity</h3>
                    <h3 class="text-xl font-semibold">Total</h3>
                </div>
                <div class="divider"></div>
                @foreach ($carts as $cart)
                    <div class="grid grid-cols-5">
                        <img class="rounded-lg" src="{{ asset('img/sunback.png') }}" alt="">
                        <div class="grid place-content-center">
                            <span class="text-xl font-bold text-center">{{ $cart->product->name }}</span>
                            <span class="text-xl font-semibold">Size: {{ $cart->size }}</span>
                        </div>
                        <div class="grid place-content-center">
                            <span class="text-xl font-bold text-center">Rp{{ $cart->product->price }}</span>
                        </div>
                        <div class="grid place-content-center grid-cols-3">
                            <button
                                class="text-2xl size-10 place-self-center font-bold text-center bg-warning btn btn-warning"
                                onclick="decreaseQuantity(document.getElementById('quantityInput{{ $loop->iteration }}'))">-</button>
                            <input type="text" name="quantity" id="quantityInput{{ $loop->iteration }}"
                                class="cart-quantity text-xl font-bold text-center" onchange="updateQuantity(this)"
                                data-cartId="{{ $cart->id }}" value="{{ $cart->quantity }}">
                            <button
                                class="text-2xl size-10 place-self-center font-bold text-center bg-warning btn btn-warning"
                                onclick="increaseQuantity(document.getElementById('quantityInput{{ $loop->iteration }}'))">+</button>
                        </div>
                        <div class="grid place-content-center">
                            <div class="ps-10">
                                <span class="text-xl font-bold text-center me-5">Rp{{ $cart->total_costs }}</span>
                                <form action="/cart/{{ $cart->id }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name='cart'>
                                    <button type="submit"
                                        class="btn btn-square btn-sm bg-transparent border-none hover:bg-warning hover:text-primary-content">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <form action="/cart" method="POST" id="updateCartQty">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="cart_id" id="cart_id" value="{{ $cart->id }}">
                        <input type="hidden" name="quantity" id="quantity">
                    </form>
                @endforeach
            </div>
            <div class="my-10 grid justify-items-center">
                <p class="text-3xl font-bold mb-5">Sub Total : Rp{{ $carts->sum('total_costs') }}</p>
                <button class="btn btn-warning bg-warning w-40 text-xl  ">Checkout</button>
            </div>
        @endif
    </div>
@endsection

<script>
    function hideDiv() {
        const myDiv = document.getElementById("alert");
        myDiv.style.display = "none";
    }

    function closeDiv() {
        const myDiv = document.getElementById("alert");
        myDiv.style.display = "none";
    }

    setTimeout(hideDiv, 6000);

    function updateQuantity(qty) {
        document.getElementById('quantity').value = qty.value;
        document.getElementById('updateCartQty').submit();
    }

    function increaseQuantity(qtyInput) {
        let currentQuantity = parseInt(qtyInput.value);
        let newQuantity = currentQuantity + 1; // Menambah satu pada kuantitas

        // Update nilai input secara otomatis
        qtyInput.value = newQuantity;

        // Set nilai cart_id
        document.getElementById('cart_id').value = qtyInput.getAttribute('data-cartId');

        // Set nilai quantity
        document.getElementById('quantity').value = newQuantity;

        // Submit formulir
        document.getElementById('updateCartQty').submit();
    }

    function decreaseQuantity(qtyInput) {
        let currentQuantity = parseInt(qtyInput.value);
        let newQuantity = currentQuantity - 1; // Menambah satu pada kuantitas

        // Update nilai input secara otomatis
        qtyInput.value = newQuantity;

        // Set nilai cart_id
        document.getElementById('cart_id').value = qtyInput.getAttribute('data-cartId');

        // Set nilai quantity
        document.getElementById('quantity').value = newQuantity;

        // Submit formulir
        document.getElementById('updateCartQty').submit();
    }
</script>
