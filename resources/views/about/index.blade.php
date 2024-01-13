<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />

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
    <div class="about">
        <div class="div">
            <div class="group">
                <div class="group-2">
                    <div class="account">
                        <div class="text-wrapper">Account</div>
                    </div>
                    <div class="cart">
                        <div class="text-wrapper">Cart</div>
                    </div>
                    <input class="search" placeholder="Search" type="text" />
                </div>
            </div>
            <div class="group-3">
                <div class="group-4">
                    <div class="shop">
                        <div class="text-wrapper">Shop</div>
                    </div>
                    <div class="div-wrapper">
                        <div class="text-wrapper-2">About</div>
                    </div>
                </div>
                <div class="home">
                    <div class="text-wrapper">Home</div>
                </div>
            </div>
            <div class="group-5">
                <div class="text-wrapper-3">About</div>
                <div class="text-wrapper-4">Sympathy For Dandelion</div>
            </div>
            <div class="overlap-group-wrapper">
                <div class="overlap-group">
                    <p class="get-to-know-sympathy">
                        <span class="span">Get to Know &#34;Sympathy for Dandelion&#34; 🌼<br /><br /></span>
                        <span class="text-wrapper-5">Sympathy For Dandelion is a Jakarta-based clothing brand with a
                            strong focus on sustainability and the environment. One standout aspect is that every time
                            you purchase a product from Sympathy For Dandelion, a portion of
                            your purchase goes towards environmental well-being, especially in Jakarta. This means that
                            with every product you buy, you&#39;re contributing to the preservation and support of the
                            environment in Jakarta. It&#39;s Sympathy
                            For Dandelion&#39;s way of seamlessly blending fashion with social and environmental
                            responsibility. Additionally, Sympathy For Dandelion offers a variety of clothing products
                            designed with attention to detail, allowing you
                            to look fashionable and feel comfortable. 🌿✨</span>
                    </p>
                    <img class="male-hand-holding-a"
                        src="{{ asset('img/male-hand-holding-a-black-iphone-x-mockup-against-a-transparent-backdrop-a14135(1).png') }}" />
                    <p class="goals-of-sympathy">
                        <span class="span">Goals of Sympathy for Dandelion 🌿🌍<br /><br /></span>
                        <span class="text-wrapper-5">1. Sustainable Environment: 🌳🌱 Support and
                            &nbsp;&nbsp;&nbsp;&nbsp;maintain environmental sustainability,
                            <br />&nbsp;&nbsp;&nbsp;&nbsp;particularly in Jakarta, through tree planting
                            <br />&nbsp;&nbsp;&nbsp;&nbsp;and
                            other sustainable efforts.<br />2. Sustainable Fashion: ♻️👗 Provide fashionable
                            <br />&nbsp;&nbsp;&nbsp;&nbsp;clothing that is also environmentally
                            <br />&nbsp;&nbsp;&nbsp;&nbsp;conscious, with eco-friendly materials and
                            <br />&nbsp;&nbsp;&nbsp;&nbsp;durable designs.<br />3. Customer Awareness: 🌟🧑‍🤝‍🧑
                            Increase customer <br />&nbsp;&nbsp;&nbsp;&nbsp;awareness of environmental issues and
                            <br />&nbsp;&nbsp;&nbsp;&nbsp;encourage active
                            participation in supporting <br />&nbsp;&nbsp;&nbsp;&nbsp;sustainability.<br />4. Business
                            Success: 🚀📈 Achieve business <br />&nbsp;&nbsp;&nbsp;&nbsp;success by selling high-quality
                            products to
                            <br />&nbsp;&nbsp;&nbsp;&nbsp;environmentally conscious customers.<br /><br />
                            With these goals, Sympathy for Dandelion is committed to blending fashionable attire with
                            positive changes for the environment and society. ✨🛍️</span>
                    </p>

                    <p class="vision-of-sympathy">
                        <span class="span">Vision of Sympathy for Dandelion 🌼🌍<br /><br /></span>
                        <span class="text-wrapper-5">&#34;To be a catalyst for change in the fashion industry, leading
                            by example in sustainability and social responsibility. We aim to promote a sustainable
                            lifestyle by creating fashionable clothing that cares for the
                            environment.&#34; ✨👗</span>
                    </p>
                    <p class="mission-of-sympathy">
                        <span class="span">Mission of Sympathy for Dandelion 🚀👚🌿<br /><br /></span>
                        <span class="text-wrapper-5" 1. Sustainable Fashion: ♻️👗 Designing sustainable clothing that
                            not only indulges <br />&nbsp;&nbsp;&nbsp;&nbsp;customers with style but also supports our
                        environment.<br />2. Awareness and Education: 📚🌱 Educating
                        customers about the importance of <br />&nbsp;&nbsp;&nbsp;&nbsp;sustainability and how they can
                        contribute through mindful product choices.<br />3. Planting Trees for the Earth: 🌳🌍 Planting
                        one tree for every product we
                        sell, <br />&nbsp;&nbsp;&nbsp;&nbsp;helping maintain ecosystem balance and reduce the impact of
                        climate change.<br />4. Global Community: 🌏🤝 Building a global community inspired by
                        sustainability,
                        <br />&nbsp;&nbsp;&nbsp;&nbsp;sharing strong environmental values, and working together for
                        positive change.<br />5. Transparency and Integrity: 🕵️‍♀️📜 Providing transparent information
                        about our
                        <br />&nbsp;&nbsp;&nbsp;&nbsp;materials and production processes, empowering customers to make
                        smart and <br />
                        &nbsp;&nbsp;&nbsp;&nbsp;sustainable decisions.</span>
                    </p>
                </div>
            </div>
            <div class="group-6">
                <div class="group-7">
                    <div class="text-wrapper-6">Subscribe</div>
                    <p class="p">get information about product updates and discounts</p>
                </div>
                <div class="group-8">
                    <div class="overlap-group-2">
                        <form action="/email" method="POST">
                            @csrf
                            <div class="text-wrapper-7">
                                <input type="text" name="email" placeholder="Enter your email" />
                            </div>
                            <button type="submit" class="custom-submit-button">
                                <img class="vector" src="{{ asset('img/right.png') }}" />
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="group-9">
                <img class="SFD-logo-white" src="{{ asset('img/SFDLOGOWHITE.png') }}" />
                <div class="group-10">
                    <div class="text-wrapper-6">Shop</div>
                    <div class="group-11">
                       <a href="/category/1"> <div class="text-wrapper-8">t-shirts</div></a>
                       <a href="/category/2"> <div class="text-wrapper-9">stationary</div></a>
                       <a href="/category/3"> <div class="text-wrapper-10">accessories</div></a>
                    </div>
                </div>
                <div class="group-12">
                    <div class="text-wrapper-6">Info</div>
                    <div class="group-13">
                        <div class="text-wrapper-8"><a href="/about"> about</a></div>
                        <a href="/contactus" class="text-wrapper-11">contact us</a>
                    </div>
                </div>
                <div class="group-14">
                    <div class="text-wrapper-6">Social</div>
                    <div class="group-15">
                        <a href="https://www.instagram.com/sympathyfordandelion" target="_blank">
                            <img class="icon-instagram" src="{{ asset('img/vectorinstagram.svg') }}"
                                alt="Instagram" />
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone=6281284903647&text&type=phone_number&app_absent=0"
                            target="_blank">
                            <img class="icon-whatsapp" src="{{ asset('img/vectorwhatsapp.svg') }}" />
                        </a>
                    </div>
                </div>
            </div>
            <p class="copyright">Copyright © 2023 Sympathy for Dandelion<br />“Let’s Fuck Around and Find Out.”</p>
            <div class="group-16">
                <div class="group-17">
                    <div class="group-wrapper" style="background-image: url('{{ asset('img/Burhannudin.png') }}');">
                        <div class="group-18">
                            <div class="group-19">
                                <div class="text-wrapper-12">Burhannudin</div>
                                <div class="text-wrapper-13">lifelong learner</div>
                            </div>
                        </div>
                    </div>
                    <div class="group-20" style="background-image: url('{{ asset('img/rifki.png') }}');">
                        <div class="group-18">
                            <div class="group-19">
                                <div class="text-wrapper-12">Rifki Arfiansyah</div>
                                <div class="text-wrapper-13">11.11 PM</div>
                            </div>
                        </div>
                    </div>
                    <div class="group-21" style="background-image: url('{{ asset('img/Akhdan.png') }}');">
                        <div class="group-18">
                            <div class="group-19">
                                <div class="text-wrapper-12">Muhamad Akhdan</div>
                                <div class="text-wrapper-13">glory glory man united</div>
                            </div>
                        </div>
                    </div>
                    <div class="group-22" style="background-image: url('{{ asset('img/Zikry.png') }}');">
                        <div class="group-18">
                            <div class="group-19">
                                <div class="text-wrapper-12">Muhamad Zikry</div>
                                <div class="text-wrapper-13">Mr. Important</div>
                            </div>
                        </div>
                    </div>
                    <div class="group-23" style="background-image: url('{{ asset('img/jaid.png') }}');">
                        <div class="group-18">
                            <div class="group-19">
                                <div class="text-wrapper-12">Mujahid Azzam</div>
                                <p class="text-wrapper-18">a little bit of gasgow</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-14">Meet Our Team</div>
            </div>
        </div>
    </div>
</body>

</html>
