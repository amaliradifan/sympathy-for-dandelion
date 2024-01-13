<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}" />

    <script src="navbar.js  " defer></script>
</head>

<body>
    <nav class="navbar">
        <div class="navbar-nav">
            <a href="/" class="nav-link" data-target="home"><b>Home</b></a>
            <a href="/products" class="nav-link" data-target="shop"><b>Shop</b></a>
            <a href="/about" class="nav-link" data-target="about"><b>About</b></a>
        </div>

        <div class="navbar-extra">
            <a href="Search.html" class="nav-link" data-target="search"><b>Search</b></a>
            <a href="/signin" class="nav-link" data-target="account"><b>LogOut</b></a>
            <a href="/cart" class="nav-link" data-target="cart"><b>Cart</b></a>
        </div>
    </nav>
    <div class="account-profile">
        <div class="div">
            <div class="group">
                <div class="group-2">
                    <div class="account">
                        <div class="text-wrapper">Account</div>
                    </div>
                    <div class="cart">
                        <div class="text-wrapper-2">Cart</div>
                    </div>
                    <input class="search" placeholder="Search" type="text" />
                </div>
            </div>
            <div class="group-3">
                <div class="group-4">
                    <div class="shop">
                        <div class="text-wrapper-2">Shop</div>
                    </div>
                    <div class="about">
                        <div class="text-wrapper-2">About</div>
                    </div>
                </div>
                <div class="home">
                    <div class="text-wrapper-2">Home</div>
                </div>
            </div>
            <div class="group-5">
                <div class="text-wrapper-3">Profile</div>
                <div class="text-wrapper-4">Hello! {{ auth()->user()->name }}</div>
            </div>
            <div class="group-6">
                <a href="/address">
                    <div class="address">
                        <div class="text-wrapper-5">Address</div>
                    </div>
                </a>
                <div class="text-wrapper-6">Account Details</div>
            </div>
            <div class="overlap">
                <form action="/logout" method="POST">
                    @csrf
                    <div class="sign-out">
                        <div class="text-wrapper-7">Sign Out</div>
                </form>
            </div>
            <div class="overlap-group">
                <img class="img" src="{{ asset('img/white_dandelion.png') }}" />
                <div class="group-7">
                    <div class="group-8">
                        <div class="text-wrapper-8">Subscribe</div>
                        <p class="p">get information about product updates and discounts</p>
                    </div>
                    <div class="overlap-group-wrapper">
                        <div class="overlap-group-2">
                            <div class="text-wrapper-9">Your email</div>
                            <img class="vector" src="{{ asset('img/right.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="group-9">
            <img class="SFD-logo-white" src="{{ asset('img/SFDLOGOWHITE.png') }}" />
            <div class="group-10">
                <div class="text-wrapper-8">Shop</div>
                <div class="group-11">
                    <div class="text-wrapper-10">t-shirts</div>
                    <div class="text-wrapper-11">stationary</div>
                    <div class="text-wrapper-12">accessories</div>
                </div>
            </div>
            <div class="group-12">
                <div class="text-wrapper-8">Info</div>
                <div class="group-13">
                    <div class="text-wrapper-10">about</div>
                    <a href="/contactus" class="text-wrapper-11">contact us</a>
                </div>
            </div>
            <div class="group-14">
                <div class="text-wrapper-8">Social</div>
                <div class="group-15">
                    <a href="https://www.instagram.com/sympathyfordandelion" target="_blank">
                        <img class="icon-instagram" src="{{ asset('img/vectorinstagram.svg') }}" alt="Instagram" />
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=6281284903647&text&type=phone_number&app_absent=0"
                        target="_blank">
                        <img class="icon-whatsapp" src="{{ asset('img/vectorwhatsapp.svg') }}" />
                    </a>
                </div>
            </div>
        </div>
        <p class="copyright">Copyright © 2023 Sympathy for Dandelion<br />“Let’s Fuck Around and Find Out.”</p>
    </div>
    </div>
</body>

</html>
