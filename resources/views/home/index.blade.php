@extends('layouts.main')
@section('container')
    @if (session()->has('loginSuccess'))
        <div class="toast toast-top toast-end mt-20 transition ease-in-out delay-500" id="toast">
            <div class="alert alert-success ps-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{!! session('loginSuccess') !!}</span>
                <button onclick="closeDiv()" class="btn btn-square btn-sm bg-transparent border-none ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="grid place-items-center mt-5">
        <img src="img/SFDLOGOWHITE.png" class="w-7/12" alt="">
        <a href="/shop" class="text-warning text-2xl font-bold mt-10 hover:underline">View All Products</a>
    </div>
    <div class="grid place-items-center text-2xl mt-28">
        <div class="mb-5"><span class="font-bold" id="element"></span></div>
        <p class="w-2/3 text-center text-xl">At Sympathy for Dandelion, we're on a mission to make fashion not only
            beautiful
            but
            also
            sustainable. 🌿✨ We
            believe in celebrating the unique beauty and potential within each individual while also nurturing the
            planet we
            all call home. 🌎</p>
    </div>
    <div class="grid grid-cols-3 place-items-center my-44 px-20">
        <a href="">
            <div class="card w-80 bg-base-100 shadow-xl transition-transform transform hover:scale-105">
                <figure><img src="img/ContentBaju.jpg" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title btn btn-active btn-ghost">T-shirts!</h2>
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
        <div class="mb-5"><span class="font-bold" id="element2"></span></div>
        <p class="w-2/3 text-center text-xl">Just like the resilient dandelion that thrives amidst life&#39;s
            challenges, we
            embrace the
            uniqueness in every individual. 🌱 And now, we&#39;re taking our commitment to nature one step
            further. For every product you purchase,
            we pledge to plant a tree. 🌳🌟</p>
    </div>
    @include('partials.subscribe')
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- Setup and start animation! -->
    <script>
        var typed = new Typed('#element', {
            strings: ['🌼 Get To Know Sympathy For Dandelion🌼'],
            typeSpeed: 50,
        });
        var typed2 = new Typed('#element2', {
            strings: ['Why “Sympathy for Dandelion”? 🌼'],
            typeSpeed: 50,
        });
    </script>
@endsection

<script>
    function hideDiv() {
        var myDiv = document.getElementById("toast");
        myDiv.style.display = "none";
    }

    function closeDiv() {
        var myDiv = document.getElementById("toast");
        myDiv.style.display = "none";
    }

    setTimeout(hideDiv, 10000);
</script>
