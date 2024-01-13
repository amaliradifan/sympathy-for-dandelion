<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('css/Payment.css') }}" />
</head>

<body>
    <div class="cart">
        <div class="div">
          <form action="/payment" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <input type="hidden" name="Amount" value="320000">
            <input type="hidden" name="Type" value="Dana">
            <a href="/cart">
                <div class="back">
                    <div class="text-wrapper">Back</div>
                </div>
            </a>
            <div class="div-wrapper">
                <div class="text-wrapper-2">Payment</div>
            </div>
            <div class="group">
                <div class="line"></div>
                <div class="text-wrapper-3">Delivery</div>
                <div class="text-wrapper-4">{{ auth()->user()->name }}</div>
                <div class="text-wrapper-5">{{ $address->Phone }}</div>
                <div class="text-wrapper-6">{{ $address->Address }}</div>
            </div>
            <div class="group-2">
                <div class="group-3">
                    <div class="line"></div>
                    <div class="text-wrapper-3">Payment Methods</div>
                </div>
                <div class="overlap-group">
                    <div class="group-4">
                        <div class="text-wrapper-7">Dana</div>
                        <input type="radio" id="dana" name="payment-method" class="radio-input">
                        <label for="dana" class="radio-label"></label>
                    </div>
                    <div class="text-wrapper-9">Virtual Account: 3901085810287416</div>
                </div>
                <div class="group-7">
                    <div class="group-6">
                        <div class="text-wrapper-8">GoPay</div>
                        <input type="radio" id="gopay" name="payment-method" class="radio-input">
                        <label for="gopay" class="radio-label"></label>
                    </div>
                    <div class="text-wrapper-10">Virtual Account: 70001085810187416</div>
                </div>
                <div class="group-8">
                    <div class="group-6">
                        <div class="text-wrapper-8">ShopeePay</div>
                        <input type="radio" id="shopeepay" name="payment-method" class="radio-input">
                        <label for="shopeepay" class="radio-label"></label>
                    </div>
                    <div class="text-wrapper-9">Virtual Account: 122081324685934</div>
                </div>
            </div>
            <div class="group-9">
                <div class="line"></div>
                <div class="line-2"></div>
                <div class="group-10">
                    <div class="text-wrapper-11">price</div>
                    <div class="text-wrapper-12">quantity</div>
                    <div class="text-wrapper-13">total</div>
                </div>
                <div class="overlap-group-wrapper">
                    <div class="overlap-group-2">
                        <div class="group-11">
                            <img class="image" src="{{ asset('img/sunback.png') }}" />
                            <div class="text-wrapper-14">sun and flowers</div>
                            <div class="text-wrapper-15">Rp. 150.000</div>
                            <div class="text-wrapper-16" id="total-price">Rp. 300,000</div>
                            <div class="group-12">
                                <div class="text-wrapper-17">2</div>
                            </div>
                        </div>
                        <div class="text-wrapper-18">Size: M</div>
                    </div>
                </div>
                <div class="group-13">
                    <div class="text-wrapper-19">Shipping With : JNE</div>
                    <div class="group-14">
                        <div class="radio-wrapper">
                            <input type="radio" id="sameday" name="shipping-method" class="radio-input">
                            <label for="sameday" class="radio-label">
                                <div class="radio-button"></div>
                                <div class="text-wrapper-20">Sameday: Rp. 20.000,-</div>
                            </label>
                        </div>
                        <div class="radio-wrapper">
                            <input type="radio" id="regular" name="shipping-method" class="radio-input">
                            <label for="regular" class="radio-label">
                                <div class="radio-button"></div>
                                <div class="text-wrapper-21">Regular: Rp. 10.000,-</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="text-wrapper-3">Product</div>
            </div>
            <div class="group-17">
                <div class="text-wrapper-22">subtotal</div>
                <div class="text-wrapper-23" id= "total-price-display">Rp.300.000</div>
            </div>
            <a href="/">
                <button type="submit" class="button-finished">
                    <div class="text-wrapper-24">Finished</div>
                </button>
            </a>
          </form>
        </div>
    </div>
    <script>
        const samedayRadioButton = document.getElementById('sameday');
        const regularRadioButton = document.getElementById('regular');
        const totalPriceElement = document.getElementById('total-price');
        const totalPriceDisplayElement = document.getElementById('total-price-display');

        // Menambahkan event listener untuk radio button
        samedayRadioButton.addEventListener('change', updateTotalPrice);
        regularRadioButton.addEventListener('change', updateTotalPrice);

        // Fungsi untuk memperbarui total harga berdasarkan pilihan radio button
        function updateTotalPrice() {
            let additionalCost = 0;

            // Jika memilih sameday, tambahkan 20.000
            if (samedayRadioButton.checked) {
                additionalCost = 20000;
            }

            // Jika memilih regular, tambahkan 10.000
            if (regularRadioButton.checked) {
                additionalCost = 10000;
            }

            // Mendapatkan nilai total harga dari text-wrapper-16
            let totalPrice = parseInt(totalPriceElement.innerText.replace('Rp. ', '').replace(',', ''));

            // Menambahkan biaya tambahan
            totalPrice += additionalCost;

            // Menampilkan total harga yang baru di text-wrapper-23
            totalPriceDisplayElement.innerText = `Rp. ${totalPrice.toLocaleString()}`;
        }
    </script>
</body>

</html>
