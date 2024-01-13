@extends('layouts.main')
@section('container')
    <div class="grid place-items-center mt-10">
        <img src="img/SFDLOGOWHITE.png" class="w-7/12" alt="">
        <a href="/shop" class="text-warning text-2xl font-bold mt-10 hover:underline">View All Products</a>
    </div>
    <div class="grid place-items-center text-2xl mt-28">
        <h1 class="font-bold mb-5">🌼 Get To Know Sympathy For Dandelion🌼</h1>
        <p class="w-2/3 text-center text-xl">At Sympathy for Dandelion, we're on a mission to make fashion not only beautiful
            but
            also
            sustainable. 🌿✨ We
            believe in celebrating the unique beauty and potential within each individual while also nurturing the planet we
            all call home. 🌎</p>
    </div>
    <div class="grid grid-cols-3 place-items-center my-44 space-x-4">
        <a href="">
            <div class="card w-80 bg-base-100 shadow-xl transition-transform transform hover:scale-105">
                <figure><img src="img/ContentBaju.jpg" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title btn btn-active btn-ghost">T-shirt!</h2>
                    <p>Sympathy for Dandelion T-shirt Collections</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-warning bg-warning btn-active">Buy Now</button>
                    </div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card w-80 bg-base-100 shadow-xl transition-transform transform hover:scale-105">
                <figure><img src="img/ContentBaju.jpg" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title btn btn-active btn-ghost">Accessories!</h2>
                    <p>Sympathy for Dandelion Accessories Collections</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-warning bg-warning btn-active">Buy Now</button>
                    </div>
                </div>
            </div>
        </a>
        <a href="">
            <div class="card w-80 bg-base-100 shadow-xl transition-transform transform hover:scale-105">
                <figure><img src="img/ContentBaju.jpg" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title btn btn-active btn-ghost">Stationary!</h2>
                    <p>Sympathy for Dandelion Stationary Collections</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-warning bg-warning btn-active">Buy Now</button>
                    </div>
                </div>
            </div>
    </div></a>
    <div class="grid place-items-center text-2xl mt-28 mb-44">
        <h1 class="font-bold mb-5">Why “Sympathy for Dandelion”? 🌼</h1>
        <p class="w-2/3 text-center text-xl">Just like the resilient dandelion that thrives amidst life&#39;s challenges, we
            embrace the
            uniqueness in every individual. 🌱 And now, we&#39;re taking our commitment to nature one step
            further. For every product you purchase,
            we pledge to plant a tree. 🌳🌟</p>
    </div>
    <div class="form-control w-full my-20 grid grid-cols-2 ps-20">
        <label class="inline col-span-1">
            <span class="label-text block text-3xl font-bold text-[currentColor]">Subscribe</span>
            <span class="label-text block text-xl font-normal">get information about product updates and discounts</span>
        </label>
        <div class="join col-span-1">
            <input type="text" placeholder="username@site.com" class="input input-bordered join-item w-4/6 h-full" />
            <button class="btn bg-warning btn-warning join-item h-full">Subscribe</button>
        </div>
    </div>
@endsection
