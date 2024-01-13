<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('css/account.css') }}" />

    <script src="{{ asset('javascript/navbar.js') }}" defer></script>
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
           @auth
           <a href="/profile" class="nav-link" data-target="account"><b>Account</b></a>
           @else 
           <a href="/signin" class="nav-link" data-target="account"><b>SignIn</b></a>
           @endauth
            <a href="/cart" class="nav-link" data-target="cart"><b>Cart</b></a>
        </div>
    </nav>
    </nav>
    <div class="sign-in">
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
                <img class="SFD-logo-white" src="{{ asset('img/SFDLOGOWHITE.png') }}" />
                <div class="group-4">
                    <div class="text-wrapper-3">Shop</div>
                    <div class="group-5">
                        <a href="/category/1"><div class="text-wrapper-4">t-shirts</div></a>
                        <a href="/categody/3"><div class="text-wrapper-5">stationary</div></a>
                       <<a href="/category/2"><div class="text-wrapper-6">accessories</div></a>
                    </div>
                </div>
                <div class="group-6">
                    <div class="text-wrapper-3">Info</div>
                    <div class="group-7">
                        <div class="text-wrapper-4"><a href="/about"> about</a></div>
                        <div class="text-wrapper-7"><a href="/contactus"> contact us</a></div>
                    </div>
                </div>
                <div class="group-8">
                    <div class="text-wrapper-3">Social</div>
                    <div class="group-9">
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
            <div class="group-10">
                <div class="group-11">
                    <div class="text-wrapper-3">Subscribe</div>
                    <p class="p">get information about product updates and discounts</p>
                </div>
                <div class="overlap-group-wrapper">
                    <div class="overlap-group">
                        <div class="text-wrapper-8"><input type="text" placeholder="Enter your email" /></div>
                        <img class="vector" src="{{ asset('img/vectorsubscribe(1).svg') }}" />
                    </div>
                </div>
            </div>
            <div class="group-12">
                <div class="shop">
                    <div class="text-wrapper-2">Shop</div>
                </div>
                <div class="about">
                    <div class="text-wrapper-2">About</div>
                </div>
                <div class="home">
                    <div class="text-wrapper-2">Home</div>
                </div>
            </div>
            <div id="login-fail-popup" class="frame" style="display: none;">
                <div class="div">
                    <img class="close-square" src="{{ asset('img/close-square.svg') }}" onclick="closePopup()" />
                    <p class="text-wrapper-20">Unable to Sign in. Please check your email and password and try again.
                    </p>
                </div>
            </div>
            <div class="group-13">
                <form action="/signin" method="POST" onsubmit="return checkLogin()">
                    @csrf
                    <div class="text-wrapper-9">Sign In</div>
                    <div class="group-14">
                        <div class="rectangle"><input type="text" name="email" /></div>
                        <div class="text-wrapper-10">Email</div>
                    </div>
                    <div class="group-15">
                        <div class="rectangle"><input type="password" name="password" /></div>
                        <div class="text-wrapper-11">Password</div>
                    </div>
                    <div class="group-16">
                        <p class="don-t-have-an">
                            <span class="span">Don&#39;t have an account?</span>
                            <span class="text-wrapper-12">&nbsp;</span>
                            <a href="/signup" class="no-underline">
                                <span class="text-wrapper-13">Sign Up</span>
                            </a>
                        </p>
                        <div class="div-wrapper">
                            <button type="submit" class="overlap-group-2">
                                <div class="text-wrapper-14">Sign In</div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
