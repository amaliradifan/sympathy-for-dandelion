<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="Shoproguide.css" />
    <link rel="stylesheet" href="{{ asset('css/shopro.css') }}" />
    <script src="{{ asset('javascript/navbar.js') }}" defer></script>
    <title>SympathyForDandelion</title>
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
    <div class="shop-product">
        <div class="div">
            <div class="group">
                <div class="group-2">
                    <div class="account">
                        <div class="text-wrapper">Account</div>
                    </div>
                    <div class="cart">
                        <div class="text-wrapper">Cart</div>
                    </div>
                    <div class="search">
                        <div class="text-wrapper">Search</div>
                    </div>
                </div>
            </div>
            <div class="group-3">
                <img class="SFD-logo-white" src="{{ asset('img/SFDLOGOWHITE') }}.png" />
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
                        <a href="/contactus" class="text-wrapper-6">contact us</a>
                    </div>
                </div>
                <div class="group-8">
                    <div class="text-wrapper-2">Social</div>
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
                    <div class="text-wrapper-2">Subscribe</div>
                    <p class="p">get information about product updates and discounts</p>
                </div>
                <div class="overlap-group-wrapper">
                    <div class="overlap-group">
                        <div class="text-wrapper-8"><input type="text" placeholder="Enter your email" /></div>
                        <img class="vector" src="{{ asset('img/right.png') }}" />
                    </div>
                </div>
            </div>
            <a href="/products">
                <div class="back">
                    <div class="text-wrapper-9">Back</div>
                </div>
            </a>
            <div class="overlap">
                <div class="overlap-wrapper">
                    <div class="overlap-2">
                        <div class="group-12">
                            <img class="image" src="{{ asset('img/sunback.png') }}" />
                            <div class="text-wrapper-10">{{ $product->name }}</div>
                            <div class="text-wrapper-11">{{ $product->category->Name }}</div>
                            <div class="text-wrapper-12">Rp. {{ $product->Price }}</div>
                        </div>
                        <div class="group-wrapper">
                            <div class="div-wrapper">
                                <a href="/cart">
                                    <button type="submit" class="overlap-group-2">
                                        <div class="text-wrapper-13">Into Cart</div>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="group-13">
                    <div class="s">
                        <div class="size-s-0">
                            <button class="button-custom" id="buttonS">
                                <img src="{{ asset('img/defaultSizeS.svg') }}" id="imageS">
                            </button>
                        </div>
                    </div>

                    <!-- Struktur HTML untuk ukuran 'm', 'l', 'xl', dan 'xxl' -->
                    <div class="m">
                        <div class="size-s-1">
                            <button class="button-custom" id="buttonM">
                                <img src="{{ asset('img/defaultSizeM.svg') }}" id="imageM">
                            </button>
                        </div>
                    </div>

                    <div class="l">
                        <div class="size-s-2">
                            <button class="button-custom" id="buttonL">
                                <img src="{{ asset('img/defaultSizeL.svg') }}" id="imageL">
                            </button>
                        </div>
                    </div>

                    <div class="xl">
                        <div class="size-s-3">
                            <button class="button-custom" id="buttonXl">
                                <img src="{{ asset('img/defaultSizeXl.svg') }}" id="imageXl">
                            </button>
                        </div>
                    </div>

                    <div class="xxl">
                        <div class="size-s-4">
                            <button class="button-custom" id="buttonXxl">
                                <img src="{{ asset('img/defaultSizeXxl.svg') }}" id="imageXxl">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-14">
                <a href="/products/1">
                <div class="group-15">
                    <img class="img" src="{{ asset('img/sunback.png') }}" />
                    <div class="group-16">
                        <div class="text-wrapper-15">sympathy for dandelion</div>
                        <div class="text-wrapper-16">t-shirt</div>
                        <div class="text-wrapper-17">Rp. 150.000</div>
                    </div>
                </div>
                </a>
                <a href="/products/2">
                <div class="group-17">
                    <img class="img" src="{{ asset('img/sunback.png') }}" />
                    <div class="group-16">
                        <div class="text-wrapper-15">sympathy for dandelion</div>
                        <div class="text-wrapper-18">accessories</div>
                        <div class="text-wrapper-17">Rp. 150.000</div>
                    </div>
                </div>
                </a>
                <a href="/products/3">
                <div class="group-18">
                    <img class="img" src="{{ asset('img/sunback.png') }}" />
                    <div class="group-16">
                        <div class="text-wrapper-15">sympathy for dandelion</div>
                        <div class="text-wrapper-18">stationery</div>
                        <div class="text-wrapper-17">Rp. 150.000</div>
                    </div>
                </div>
                </a>
            </div>
            <div class="text-wrapper-19">Other Products</div>
            <div class="group-19">
                <div class="shop">
                    <div class="text-wrapper-20">Shop</div>
                </div>
                <div class="about">
                    <div class="text-wrapper">About</div>
                </div>
                <div class="home">
                    <div class="text-wrapper">Home</div>
                </div>
            </div>
            <div class="text-wrapper-21">Backstory</div>
            <p class="lorem-ipsum-dolor">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu fringilla eros. Vivamus vitae
                vulputate quam, sed ultricies lacus. Cras pulvinar sit amet arcu ac condimentum. In egestas, libero sed
                pellentesque fringilla,
                eros erat maximus odio, quis or nare sem lacus eleifend urna. Sed sodales mi elit, vel vehicula nibh
                efficitur quis. Fusce nec lectus ipsum. Nullam ullamcorper quam sed tempor sodales. Aliquam sit amet
                urna facilisis, malesuada
                justo at, vulputate erat. Ut ut ante non nisl accumsan tempus. Vestibulum lorem tortor, vestibulum
                luctus feugiat nec, tincidunt a metus. Pellentesque eu convallis nulla. Vestibulum in fermentum
                lorem.<br /><br />Mauris a dapibus
                urna, et vestibulum orci. Duis convallis odio metus, eu viverra purus rutrum id. Sed nec mi ut nibh
                efficitur tristique sed laoreet quam. Aliquam imperdiet fermentum vulputate. Maecenas scelerisque
                efficitur purus at pretium.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                Pellentesque interdum felis ut nulla rutrum pretium. Suspendisse potenti. Cras sit amet enim massa.
            </p>
            <div class="table">
                <div class="row">
                    <div class="cell">
                        <div class="content">
                            <div class="text">Size Chart</div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="content">
                            <div class="text-2">S</div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="content">
                            <div class="text-3">M</div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="content">
                            <div class="text-3">L</div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="content">
                            <div class="text-3">XL</div>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="content">
                            <div class="text-3">XXL</div>
                        </div>
                    </div>
                </div>
                <div class="row-2">
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">Width (cm)</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">47</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">50</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">53</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">56</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">59</div>
                        </div>
                    </div>
                </div>
                <div class="row-2">
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">Height (cm)</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">65</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">68</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">70</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">73</div>
                        </div>
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="text-4">76</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var imageS = document.getElementById('imageS');
        var imageM = document.getElementById('imageM');
        var imageL = document.getElementById('imageL');
        var imageXl = document.getElementById('imageXl');
        var imageXxl = document.getElementById('imageXxl');

        imageS.dataset.defaultSrc = "{{ asset('img/defaultSizeS.svg') }}";
        imageS.dataset.secondSrc = "{{ asset('img/hoverSizeS.svg') }}";

        imageM.dataset.defaultSrc = "{{ asset('img/defaultSizeM.svg') }}";
        imageM.dataset.secondSrc = "{{ asset('img/hoverSizeM.svg') }}";

        imageL.dataset.defaultSrc = "{{ asset('img/defaultSizeL.svg') }}";
        imageL.dataset.secondSrc = "{{ asset('img/hoverSizeL.svg') }}";

        imageXl.dataset.defaultSrc = "{{ asset('img/defaultSizeXl.svg') }}";
        imageXl.dataset.secondSrc = "{{ asset('img/hoverSizeXl.svg') }}";

        imageXxl.dataset.defaultSrc = "{{ asset('img/defaultSizeXxl.svg') }}";
        imageXxl.dataset.secondSrc = "{{ asset('img/hoverSizeXxl.svg') }}";

        var imageS = document.getElementById('imageS');
        var imageM = document.getElementById('imageM');
        var imageL = document.getElementById('imageL');
        var imageXl = document.getElementById('imageXl');
        var imageXxl = document.getElementById('imageXxl');

        var isFirstImageS = true;
        var isFirstImageM = true;
        var isFirstImageL = true;
        var isFirstImageXl = true;
        var isFirstImageXxl = true;

        imageS.addEventListener('click', function() {
            toggleImage(imageS, isFirstImageS);
            isFirstImageS = !isFirstImageS;
        });

        imageM.addEventListener('click', function() {
            toggleImage(imageM, isFirstImageM);
            isFirstImageM = !isFirstImageM;
        });

        imageL.addEventListener('click', function() {
            toggleImage(imageL, isFirstImageL);
            isFirstImageL = !isFirstImageL;
        });

        imageXl.addEventListener('click', function() {
            toggleImage(imageXl, isFirstImageXl);
            isFirstImageXl = !isFirstImageXl;
        });

        imageXxl.addEventListener('click', function() {
            toggleImage(imageXxl, isFirstImageXxl);
            isFirstImageXxl = !isFirstImageXxl;
        });

        function toggleImage(element, isFirstImage) {
            if (isFirstImage) {
                element.src = element.dataset.secondSrc;
            } else {
                element.src = element.dataset.defaultSrc;
            }
        }
    </script>
</body>

</html>
