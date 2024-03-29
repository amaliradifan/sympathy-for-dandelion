<div class="navbar bg-base-100 sticky top-0 h-20" style="background-color: #1f1f1f; z-index: 1000;">
    <div class="flex-1 text-xl text-warning font-semibold">
        <a href="/"><img src="{{ asset('img/white_dandelion.png') }}" alt=""
                class="size-10 max-w-full max-h-full ms-7"></a>
        <div class="flex-1 ms-28">
            <ul class="flex gap-6">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/products" class="hover:underline">Shop</a></li>
                <li><a href="/about" class="hover:underline">About</a></li>
            </ul>
        </div>
    </div>
    @auth
        <div class="flex-none me-14">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        @if (auth()->user()->carts->count())
                            <span class="badge badge-sm indicator-item">{{ auth()->user()->carts->sum('quantity') }}</span>
                        @endif
                    </div>
                </div>
                <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
                    <div class="card-body">
                        <span class="font-bold text-lg">{{ auth()->user()->carts->sum('quantity') }} Items</span>
                        <span class="text-info">Subtotal: Rp{{ auth()->user()->carts->sum('total_costs') }}</span>
                        <div class="card-actions">
                            <a href="/cart" class="btn btn-warning bg-warning btn-block">View cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                            src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li>
                        <p class="justify-between text-warning">
                            {{ auth()->user()->name }}
                        </p>
                    </li>
                    <li><a href="/profile">Profile</a></li>
                    <li>
                        <button onclick="logout_modal.showModal()">Sign Out</button>
                    </li>
                </ul>
            </div>
        </div>
    @else
        <a href="/signin"
            class="text-base me-14 btn btn-outline border-warning
        hover:bg-warning hover:border-warning text-warning">
            Sign In
        </a>
    @endauth
</div>

<dialog id="logout_modal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Sign Out!</h3>
        <p class="py-4">Are You Sure Want To Sign Out?</p>
        <div class="modal-action">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-error">Sign Out</button>
            </form>
            <form method="dialog">
                <button class="btn">Close</button>
            </form>
        </div>
    </div>
</dialog>
