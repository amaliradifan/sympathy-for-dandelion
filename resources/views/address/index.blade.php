<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('css/address.css') }}" />
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
            <a href="/profile" class="nav-link" data-target="account"><b>Account</b></a>
            <a href="/cart" class="nav-link" data-target="cart"><b>Cart</b></a>
        </div>
    </nav>
    </nav>
    <div class="account-address">
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
            <div class="text-wrapper-3">Account Details: Address</div>
            <div class="group-5">
                    <form action="/address" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <div class="group-6">
                            <div class="set-as-default">
                                <input type="radio" name="defaultAddress" id="setDefault" class="cb-sfd">
                                <label for="setDefault" class="text-wrapper-4">Set as default address</label>
                            </div>
                        </div>
                        <div class="group-7">
                            <div class="group-8">
                                <div class="group-9">
                                    <div class="rectangle">
                                        <input type="text" name="Full_Name" placeholder=""
                                            class="rectangle-input" />
                                    </div>
                                    <div class="text-wrapper-5">Full Name</div>
                                    <div class="group-10">
                                        <div class="rectangle">
                                            <input type="text" name="Address" placeholder=""
                                                class="rectangle-input" />
                                        </div>
                                        <div class="text-wrapper-5">Address</div>
                                    </div>
                                </div>
                                <div class="text-wrapper-6">*cant be blank</div>
                                <div class="text-wrapper-7">*cant be blank</div>
                            </div>
                            <div class="group-11">
                                <div class="group-8">
                                    <div class="group-9">
                                        <div class="rectangle">
                                            <input type="text" name="City" placeholder=""
                                                class="rectangle-input" />
                                        </div>
                                        <div class="text-wrapper-5">City</div>
                                    </div>
                                    <div class="group-10">
                                        <div class="rectangle">
                                            <input type="text" name="Zip_Code" placeholder=""
                                                class="rectangle-input" />
                                        </div>
                                        <div class="text-wrapper-5">ZIP Code</div>
                                    </div>
                                </div>
                                <div class="text-wrapper-6">*cant be blank</div>
                                <div class="text-wrapper-7">*cant be blank</div>
                            </div>
                            <div class="group-12">
                                <div class="group-8">
                                    <div class="group-9">
                                        <div class="rectangle">
                                            <input type="text" name="Country" placeholder=""
                                                class="rectangle-input" />
                                        </div>
                                        <div class="text-wrapper-5">Country</div>
                                    </div>
                                    <div class="group-10">
                                        <div class="rectangle">
                                            <input type="text" name="Phone" placeholder=""
                                                class="rectangle-input" />
                                        </div>
                                        <div class="text-wrapper-5">Phone</div>
                                    </div>
                                </div>
                                <div class="text-wrapper-6">*cant be blank</div>
                                <div class="text-wrapper-7">*cant be blank</div>
                            </div>

                            <button type="submit" class="button-address">
                                <div class="text-wrapper-8">Add Address</div>
                            </button>
                    </form>
            </div>
            <a href="/profile">
                <div class="back">
                    <div class="text-wrapper-9">Back</div>
                </div>
        </div></a>
    </div>
</body>

</html>
