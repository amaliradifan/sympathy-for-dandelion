<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
</head>

<body>
    <div class="cart">
        <div class="div">
            <a href="/products">
                <div class="back">
                    <div class="text-wrapper">Back</div>
                </div>
            </a>
            <div class="div-wrapper">
                <div class="text-wrapper-2">Cart</div>
            </div>
            <div class="group">
                <form action="/cart" method="POST">
                    @csrf
                    <div class="overlap-group-wrapper">
                        <button type="submit" class="overlap-group">                
                                <div class="text-wrapper-3">Check Out</div>
                    </div>
                </button>
                    <div class="line"></div>
                    <div class="line-2"></div>
                    <div class="group-2">
                        <div class="text-wrapper-4">price</div>
                        <div class="text-wrapper-5">quantity</div>
                        <div class="text-wrapper-6">total</div>
                    </div>
                    <div class="group-3">
                        <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                        <input type="hidden" name="produks_id" value="1">
                        <img class="image" src="{{ asset('img/sunback.png') }}" />
                        <div class="text-wrapper-7">sun and flower</div>
                        <div class="text-wrapper-8">Rp. 120.000</div>
                        <div class="text-wrapper-9">Rp. 120.000</div>
                        <div class="group-4">
                            <img class="plus" src="{{ asset('img/vector_minus.svg') }}" onclick="changeValue(-1)" />
                            <img class="img" src="{{ asset('img/vector_plus.svg') }}" onclick="changeValue(1)" />
                            <input type="hidden" name="Quantity" value="2">
                            <div class="text-wrapper-10" id="counter">1</div>
                        </div>
                        <img class="close-square" src="{{ 'img/vector_close.svg' }}" onclick="removeProduct(this)" />
                    </div>
                    <div class="group-6">
                        <div class="text-wrapper-11">subtotal</div>
                        <input type="hidden" name="TotalCost" value="240000">
                        <div class="text-wrapper-12" id="subtotal">Rp. 120.000</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var counterElement = document.getElementById('counter');
        var counterValue = 2; // Nilai awal
        var subtotalElement = document.getElementById('subtotal');

        function changeValue(change) {
            counterValue += change;
            counterElement.innerHTML = counterValue;

            // Menghitung nilai berdasarkan text-wrapper-8 dan text-wrapper-10
            var pricePerUnit = 120000; // Harga per unit (misalnya)
            var newValue9 = counterValue * pricePerUnit; // text-wrapper-9
            var newValue12 = counterValue * pricePerUnit; // text-wrapper-12

            // Menetapkan nilai baru ke text-wrapper-9 dan text-wrapper-12
            document.querySelector('.text-wrapper-9').innerHTML = 'Rp. ' + newValue9.toLocaleString();
            subtotalElement.innerHTML = 'Rp. ' + newValue12.toLocaleString();
        }

        function removeProduct(element) {
            // Menghapus elemen produk dari DOM
            var productContainer = element.closest('.group-3');
            productContainer.parentNode.removeChild(productContainer);

            // (Opsional) Implementasi logika lain yang diperlukan, misalnya pembaruan subtotal, dll.
        }
    </script>
</body>

</html>
