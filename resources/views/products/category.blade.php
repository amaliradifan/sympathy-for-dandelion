@extends('layouts.main')
@section('container')
    <div class="mb-16">
        <div class="text-center my-14">
            <h1 class="font-bold text-4xl">SHOP</h1>
            <h3 class="text-2xl font-medium">Sympathy For Dandelion Collections</h3>
        </div>
        <div class="grid-cols-12 grid">
            <div class="px-14 col-span-3">
                <h2 class="text-3xl font-bold border-b-4 pb-3 border-warning mb-5">Category</h2>
                <a href="/category/1">
                    <h3
                        class="font-semibold text-2xl link link-hover hover:text-warning mb-1 {{ $category->id === 1 ? 'text-warning' : '' }}">
                        T-Shirt</h3>
                </a>
                <a href="/category/2">
                    <h3
                        class="font-semibold text-2xl link link-hover hover:text-warning mb-1 {{ $category->id === 2 ? 'text-warning' : '' }}">
                        Accessories</h3>
                </a>
                <a href="/category/3">
                    <h3
                        class="font-semibold text-2xl link link-hover hover:text-warning mb-1 {{ $category->id === 3 ? 'text-warning' : '' }}">
                        Stationary</h3>
                </a>
            </div>
            <div class="col-span-9 grid grid-cols-3">
                @foreach ($products as $product)
                    <a href="/products/{{ $product->id }}" class="inline-block w-80 mb-10">
                        <div
                            class="card w-80 bg-base-100  bg-transparent overflow-hidden group transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-warning/80 hover:text-primary-content">
                            <img src="{{ asset('img/sunback.png') }}" alt="Shoes" class="w-full rounded-lg">
                            <div class="card-body px-4 pt-5">
                                <h2 class="card-title text-2xl">{{ $product->name }}</h2>
                                <p class="text-xl font-medium">{{ $product->category->name }}</p>
                                <p>IDR {{ $product->price }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="grid justify-center">{{ $products->links() }}</div>
    </div>
@endsection
