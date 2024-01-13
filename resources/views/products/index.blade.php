<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}" />

    <script src="{{asset('javascript/navbar.js')}}"" defer></script>
    <title>SympathyForDandelion</title>
</head>

<body class="Shop">
    <div class="home"></div>
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
    <div class="shop">
        <div class="div">
            <div class="group">
                <div class="group-2"></div>
            </div>
            <div class="group-3">
                <img class="SFD-logo-white" src="{{asset('img/SFDLOGOWHITE.png')}}"/>
                <div class="group-4">
                    <div class="text-wrapper-2">Shop</div>
                    <div class="group-5">
                        <a href="/category/1"><div class="text-wrapper-3">t-shirts</div></a>
                        <a href="/categody/3"><div class="text-wrapper-4">stationary</div></a>
                       <<a href="/category/2"><div class="text-wrapper-5">accessories</div></a>
                    </div>
                </div>
                <div class="group-6">
                    <div class="text-wrapper-2">Info</div>
                    <div class="group-7">
                        <div class="text-wrapper-3"> <a href="/about">about</a></div>
                        <div  class="text-wrapper-6"> <a href="/contactus">contact us</a></div>
                    </div>
                </div>
                <div class="group-8">
                    <div class="text-wrapper-2">Social</div>
                    <div class="group-9">
                        <a href="https://www.instagram.com/sympathyfordandelion" target="_blank">
                            <img class="icon-instagram" src="{{asset('img/vectorinstagram.svg')}}" alt="Instagram" />
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone=6281284903647&text&type=phone_number&app_absent=0"
                            target="_blank">
                            <img class="icon-whatsapp" src="{{asset('img/vectorwhatsapp.svg')}}" />
                        </a>
                    </div>
                </div>
            </div>
            <p class="copyright">Copyright © 2023 Sympathy for Dandelion<br />“Let’s Fuck Around and Find Out.”</p>
            <div class="group-10">
                <div class="group-11">
                    <div class="text-wrapper-2">Subscribe</div>
                    <p class="p">get information about product updates and discounts</p>
                </div>
                <div class="overlap-group-wrapper">
                    <div class="overlap-group">
                        <div class="text-wrapper-8"><input type="text" placeholder="Enter your email" /></div>
                        <img class="vector" src="{{asset('img/vectorsubscribe(1).svg')}}" />
                    </div>
                </div>
            </div>
            <div class="group-12">
                <div class="text-wrapper-9">Shop</div>
                <div class="text-wrapper-10">Sympathy For Dandelion Collections</div>
            </div>
            <div class="group-13">
                <div class="group-14">
                    <a href="/products"><div class="text-wrapper-11">Category</div></a>
                    <img class="img" src="{{asset('img/vectorcategory.svg')}}" />
                    <img class="line" src="{{asset('img/vectorlinecategory.svg')}}" />
                </div>
                <div class="group-15">
                    <div class="cat-t-shirts">
                        <a href="/category/1"><div class="text-wrapper-12">t-shirts</div></a>
                    </div>
                    <div class="cat-accessories">
                        <a href="/category/2"><div class="text-wrapper-12">accessories</div></a>
                    </div>
                    <div class="cat-stationary">
                        <a href="/category/3"><div class="text-wrapper-12">stationary</div></a>
                    </div>
                </div>
            </div>
            <div class="group-16">
                <div class="group-17">
                    <a href="/products/1">
                    <div class="group-18">
                        <img class="image"
                                src="{{ asset('img/'.$products[0]->Image)}}" />
                        <div class="group-19">
                            <div class="text-wrapper-13">{{$products[0]->name}}</div>
                            <div class="text-wrapper-14">T-shirt</div>
                            <div class="text-wrapper-15">Rp.{{$products[0]->Price}}</div>
                        </div>
                    </a>
                    </div>
                    <a href="/products/2">
                    <div class="group-20">
                        <img class="image" src="{{ asset('img/' . $products[0]->Image) }}" />
                        <div class="group-19">
                            <div class="text-wrapper-13">{{$products[0]->name}}</div>
                            <div class="text-wrapper-16">accessories</div>
                            <div class="text-wrapper-15">Rp.{{$products[0]->Price}}</div>
                        </div>
                    </div>
                    </a>
                    <a href="/products/3">
                    <div class="group-21">
                        <img class="image" src="{{ asset('img/' . $products[0]->Image) }}" />
                        <div class="group-19">
                            <div class="text-wrapper-13">{{$products[0]->name}}</div>
                            <div class="text-wrapper-16">stationery</div>
                            <div class="text-wrapper-15">Rp.{{$products[0]->Price}}</div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="group-22">
                    <div class="group-18">
                        <img class="image" src="{{ asset('img/' . $products[0]->Image) }}" />
                        <div class="group-19">
                            <div class="text-wrapper-13">{{$products[0]->name}}</div>
                            <div class="text-wrapper-14">t-shirt</div>
                            <div class="text-wrapper-15">Rp.{{$products[0]->Price}}</div>
                        </div>
                    </div>
                    <div class="group-20">
                        <img class="image" src="{{ asset('img/' . $products[0]->Image) }}" />
                        <div class="group-19">
                            <div class="text-wrapper-13">{{$products[0]->name}}</div>
                            <div class="text-wrapper-16">accessories</div>
                            <div class="text-wrapper-15">Rp.{{$products[0]->Price}}</div>
                        </div>
                    </div>
                    <div class="group-21">
                        <img class="image" src="{{ asset('img/' . $products[0]->Image) }}" />
                        <div class="group-19">
                            <div class="text-wrapper-13">{{$products[0]->name}}</div>
                            <div class="text-wrapper-16">stationery</div>
                            <div class="text-wrapper-15">Rp.{{$products[0]->Price}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
