<style>
    input[type="radio"]:checked {
        background-color: transparent !important;
        border-color: #FFE61B !important;
        color: #FFE61B !important;
    }

    input[type="radio"]:hover {
        background-color: transparent !important;
        border-color: #FFE61B !important;
        color: #FFE61B !important;
    }
</style>
@extends('layouts.main')
@section('container')
    @if (session()->has('success'))
        <div class="grid justify-items-center">
            <div role="alert" id="alert" class="alert shadow-lg w-5/6">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 text-warning" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <h3 class="font-bold">{{ session('success') }}</h3>
                </div>
                <a href="/cart" class="btn btn-sm text-warning hover:underline">See Cart</a>
                <button onclick="closeDiv()" class="btn btn-square btn-sm bg-transparent border-none "><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif
    <div class="grid my-10 p-10">
        <div class="grid justify-items-center mb-16">
            <div class="grid grid-cols-3 w-5/6">
                <div class="col-span-1 ">
                    <img src="{{ asset("img/$product->image") }}" class="rounded-2xl" alt="">
                </div>
                <div class="col-span-2 ps-20">
                    <h1 class="text-5xl font-bold mb-3">{{ $product->name }}</h1>
                    <h1 class="text-2xl font-medium mb-7">{{ $product->category->name }}</h1>
                    <h1 class="text-4xl font-semibold">Rp {{ $product->price }}</h1>
                    <form action="/cart" method="POST">
                        @csrf
                        <div class="mt-10 flex justify-between pe-28">
                            <input type="radio" aria-label="S"
                                class="btn btn-outline hover:btn-warning border-2 font-semibold size-20 text-2xl "
                                name="size" value="S" />
                            <input type="radio" aria-label="M"
                                class="btn btn-outline hover:btn-warning border-2 font-semibold size-20 text-2xl "
                                name="size" value="M" />
                            <input type="radio" aria-label="L"
                                class="btn btn-outline hover:btn-warning border-2 font-semibold size-20 text-2xl "
                                name="size" value="L" />
                            <input type="radio" aria-label="XL"
                                class="btn btn-outline hover:btn-warning border-2 font-semibold size-20 text-2xl "
                                name="size" value="XL" />
                            <input type="radio" aria-label="XXL"
                                class="btn btn-outline hover:btn-warning border-2 font-semibold size-20 text-2xl "
                                name="size" value="XXL" />
                        </div>
                        @error('size')
                            <p class="text-error mt-2">*{{ $message }}</p>
                        @enderror
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="total_costs" value="{{ $product->price }}">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <button type="submit"
                            class="btn btn-warning mt-24 w-40 size-14 text-xl bg-warning font-semibold">Add
                            To
                            Cart</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="px-28 mb-20">
            <h1 class="font-bold text-4xl mb-3">Backstory</h1>
            <p class="font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam iure, alias
                perspiciatis impedit nemo natus
                voluptates, aperiam error ad velit cum eius, ut consectetur autem quas perferendis quaerat commodi vero.
                Quod necessitatibus a voluptates, alias ipsum, illo, quae tenetur esse nemo vitae expedita nobis reiciendis!
                Enim rem dolores ad voluptate, facilis delectus aliquid? Quae nisi aut eius fuga itaque at.
                Ab rerum enim repellat saepe aut labore odit sequi nobis explicabo aliquam! Laudantium dolor repellat sit,
                rerum dicta qui quas exercitationem voluptas, explicabo odio illum beatae, eum laboriosam optio distinctio!
                Optio corporis soluta inventore sed eum eius autem? Officia hic obcaecati laudantium iure ex, exercitationem
                vero nobis magnam animi voluptate maxime nam enim, soluta totam asperiores suscipit tempora porro facilis!
                Aperiam beatae quidem blanditiis et nemo asperiores est at, eveniet praesentium, deserunt fugiat quia fugit
                <br> <br>
                Nemo natus exercitationem consectetur animi nobis maxime rerum? Harum, illo qui, laudantium minus quo,
                veniam ipsa incidunt iure itaque magnam quod accusamus eveniet excepturi expedita quidem? Minus perferendis
                aut hic.
                Animi eum odit voluptatum illo, iste officiis. Consequatur alias repellat esse quos dolorem ducimus placeat
                ipsa enim aliquid at odio obcaecati, minima consequuntur, iste omnis, labore nobis provident et rerum!
                Quae eveniet quas id quibusdam accusantium, inventore officia minima assumenda itaque voluptate repellat non
                facere repudiandae corporis ratione quam facilis doloremque! Adipisci id corrupti sint consectetur libero
                non, aliquam odit.
            </p>
        </div>
        <div class="overflow-x-auto px-28 mb-20">
            <table class="table text-center text-xl">
                <!-- head -->
                <thead class="bg-warning">
                    <tr class="text-black text-xl">
                        <th>Size Chart</th>
                        <th>S</th>
                        <th>M</th>
                        <th>L</th>
                        <th>XL</th>
                        <th>XXL</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td>Width (cm)</td>
                        <td>47</td>
                        <td>50</td>
                        <td>53</td>
                        <td>56</td>
                        <td>59</td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td>Height (cm)</td>
                        <td>65</td>
                        <td>68</td>
                        <td>70</td>
                        <td>73</td>
                        <td>76</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h1 class="font-bold text-4xl text-center mb-10">Other Products</h1>
        <div class="grid grid-cols-3 place-items-center px-10">
            <a href="products/">
                <div
                    class="card w-80 bg-base-100 mb-10 bg-transparent overflow-hidden group transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-warning/50">
                    <img src="{{ asset('img/sunback.png') }}" alt="Shoes" class="w-full rounded-lg">
                    <div class="card-body px-4 pt-5">
                        <h2 class="card-title text-2xl">Sunflower</h2>
                        <p class="text-xl font-medium">Accessories</p>
                        <p>IDR10000000</p>
                    </div>
                </div>
            </a>
            <a href="products/">
                <div
                    class="card w-80 bg-base-100 mb-10 bg-transparent overflow-hidden group transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-warning/50">
                    <img src="{{ asset('img/sunback.png') }}" alt="Shoes" class="w-full rounded-lg">
                    <div class="card-body px-4 pt-5">
                        <h2 class="card-title text-2xl">Sunflower</h2>
                        <p class="text-xl font-medium">Accessories</p>
                        <p>IDR10000000</p>
                    </div>
                </div>
            </a>
            <a href="products/">
                <div
                    class="card w-80 bg-base-100 mb-10 bg-transparent overflow-hidden group transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-warning/50">
                    <img src="{{ asset('img/sunback.png') }}" alt="Shoes" class="w-full rounded-lg">
                    <div class="card-body px-4 pt-5">
                        <h2 class="card-title text-2xl">Sunflower</h2>
                        <p class="text-xl font-medium">Accessories</p>
                        <p>IDR10000000</p>
                    </div>
                </div>
            </a>
        </div>
        @include('partials.subscribe')
    </div>
@endsection

<script>
    function hideDiv() {
        var myDiv = document.getElementById("alert");
        myDiv.style.display = "none";
    }

    function closeDiv() {
        var myDiv = document.getElementById("alert");
        myDiv.style.display = "none";
    }

    setTimeout(hideDiv, 6000);
</script>
