<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />

    <script src={{ asset('javascript/navbar.js') }} defer></script>
    <title>SympathyForDandelion</title>
    @vite('resources/css/app.css')
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
                <a href="/signin" class="nav-link" data-target="account"><b>Sign In</b></a>
            @endauth
            <a href="/cart" class="nav-link" data-target="cart"><b>Cart</b></a>
        </div>
    </nav>
    </nav>
    <div class="home">
        <div class="div">
            <p class="copyright">Copyright © 2023 Sympathy for Dandelion<br />“Let’s Fuck Around and Find Out.”</p>
            <div class="group">
                <img class="SFD-logo-white" src="{{ asset('img/SFDLOGOWHITE.png') }}" />
                <div class="group-2">
                    <div class="text-wrapper">Shop</div>
                    <div class="group-3">
                        <a href="category/1">
                            <div class="text-wrapper-2">t-shirts</div>
                        </a>
                        <a href="category/2">
                            <div class="text-wrapper-3">stationary</div>
                        </a>
                        <a href="category/3">
                            <div class="text-wrapper-4">accessories</div>
                        </a>
                    </div>
                </div>
                <div class="group-4">
                    <div class="text-wrapper">Info</div>
                    <div class="group-5">
                        <div class="text-wrapper-2"> <a href="/about">about</a></div>
                        <a href="/contactus" class="text-wrapper-5">contact us</a>
                    </div>
                </div>
                <div class="group-6">
                    <div class="text-wrapper">Social</div>

                </div>
            </div>
            <div class="group-7">
                <div class="group-8">
                    <div class="text-wrapper">Subscribe</div>
                    <p class="p">get information about product updates and discounts</p>
                </div>
                <div class="overlap-group-wrapper">
                    <div class="overlap-group">
                        <div class="text-wrapper-6"><input type="text" placeholder="Enter your email" /></div>
                        <img class="vector" src="{{ asset('img/right.png') }}" />
                    </div>
                </div>
            </div>
            <img class="SFD-logo-white-2" src="{{ asset('img/SFDLOGOWHITE.png') }}" />
            <div class="group-wrapper">
            </div>
            <div class="view-all-products">
                <div class="text-wrapper-7"><a href="/products">View all products</a></div>
            </div>
            <div class="group-10">
                <p class="text-wrapper-8">
                    At Sympathy for Dandelion, we&#39;re on a mission to make fashion not only beautiful but also
                    sustainable. 🌿✨ We believe in celebrating the unique beauty and potential within each individual
                    while also nurturing the planet we
                    all call home. 🌎
                </p>
                <p class="text-wrapper-9">🌼 Get To Know Sympathy For Dandelion🌼</p>
            </div>
            <div class="group-11">
                <a href="/category/1">
                    <div class="card-t-shirts">
                        <img class="unsplash" src="{{ asset('img/ContentBaju.jpg') }}" />
                        <div class="div-wrapper">
                            <div class="group-12">
                                <div class="overlap-group-2">
                                    <div class="text-wrapper-10">t-shirts</div>
                                </div>
                            </div>
                        </div>
                        <div class="vector-wrapper"><img class="vector-2" src="{{ asset('img/cardvector.svg') }}" />
                        </div>
                        <p class="sympathy-for">Sympathy For Dandelion <br />t-shirts collections.</p>
                    </div>
                </a>
                <a href="/category/2">
                    <div class="card-accessories">
                        <div class="overlap-wrapper">
                            <div class="overlap">
                                <img class="unsplash" src="{{ asset('img/ContentBaju.jpg') }}" />
                                <div class="vector-wrapper"><img class="vector-2"
                                        src="{{ asset('img/cardvector.svg') }}" />
                                </div>
                                <p class="sympathy-for-2">Sympathy For Dandelion <br />accessories collection.</p>
                                <div class="group-13">
                                    <div class="overlap-group-3">
                                        <div class="text-wrapper-11">accessories</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/category/3">
                    <div class="card-stationary">
                        <img class="unsplash" src="{{ asset('img/ContentBaju.jpg') }}" />
                        <div class="vector-wrapper"><img class="vector-2" src="{{ asset('img/cardvector.svg') }}" />
                        </div>
                        <p class="sympathy-for">Sympathy For Dandelion <br />stationary collection.</p>
                        <div class="group-14">
                            <div class="overlap-group-4">
                                <div class="text-wrapper-12">stationary</div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="group-15">
                <p class="text-wrapper-8">
                    Just like the resilient dandelion that thrives amidst life&#39;s challenges, we embrace the
                    uniqueness in every individual. 🌱 And now, we&#39;re taking our commitment to nature one step
                    further. For every product you purchase,
                    we pledge to plant a tree. 🌳🌟
                </p>
                <p class="text-wrapper-13">Why “Sympathy for Dandelion”? 🌼</p>
            </div>
            <div class="group-16">
                <div class="group-18">
                    <div class="group-19">
                        <div class="group-20" style="background-image: url('{{ asset('img/Burhannudin.png') }}');">
                            <div class="group-21">
                                <div class="group-22">
                                    <div class="text-wrapper-15">Burhannudin</div>
                                    <div class="text-wrapper-16">lifelong learner</div>
                                </div>
                            </div>
                        </div>
                        <div class="group-23" style="background-image: url('{{ asset('img/rifki.png') }}');">
                            <div class="group-21">
                                <div class="group-22">
                                    <div class="text-wrapper-15">Rifki Arfiansyah</div>
                                    <div class="text-wrapper-16">11.11 PM</div>
                                </div>
                            </div>
                        </div>
                        <div class="group-24" style="background-image: url('{{ asset('img/Akhdan.png') }}');">
                            <div class="group-21">
                                <div class="group-22">
                                    <div class="text-wrapper-15">Muhamad Akhdan</div>
                                    <div class="text-wrapper-16">glory glory man united</div>
                                </div>
                            </div>
                        </div>
                        <div class="group-25" style="background-image: url('{{ asset('img/Zikry.png') }}');">
                            <div class="group-21">
                                <div class="group-22">
                                    <div class="text-wrapper-15">Muhamad Zikry</div>
                                    <div class="text-wrapper-16">Mr. Important</div>
                                </div>
                            </div>
                        </div>
                        <div class="group-26" style="background-image: url('{{ asset('img/jaid.png') }}');">
                            <div class="group-21">
                                <div class="group-22">
                                    <div class="text-wrapper-15">Mujahid Azzam</div>
                                    <p class="text-wrapper-18">a little bit of gasgow</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-wrapper-17">Meet Our Team</div>
                </div>
            </div>
        </div>
        <div class="group-40">
            <a href="https://www.instagram.com/sympathyfordandelion" target="_blank">
                <img class="icon-instagram" src="{{ asset('img/vectorinstagram.svg') }}" alt="Instagram" />
            </a>
            <a href="https://api.whatsapp.com/send/?phone=6281284903647&text&type=phone_number&app_absent=0"
                target="_blank">
                <img class="icon-whatsapp" src="{{ asset('img/vectorwhatsapp.svg') }}" />
            </a>
</body>

</html>
