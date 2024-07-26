@extends('layouts.app2')
@extends('pages.navbar')
@section('title', 'Product Page')

@section('product')
    <style>
        .product-quantity {
            display: flex;
            align-items: center;
        }

        .input-group-text {
            cursor: pointer;
            /* border-top: 3px solid red;
        border-bottom: 3px solid red;
        border-left: 3px solid red; */
        }

        .input-group-text {
            cursor: pointer;
            /* border-top: 3px solid red;
        border-bottom: 3px solid red;
        border-right: 3px solid red; */
        }



        .quantity-input {
            max-width: 50px;
            /* Adjust width as needed */
            text-align: center;
            /* border-top: 3px solid red;
        border-bottom: 3px solid red; */
        }

        .button-container{
            display: flex;
            gap: 10px;
        }
        .button-container a{
            text-decoration: none;
        }

        


.cart-button, .buy-button {
    background-color: #EE1313;
    border-radius: 3px;
    width: 16vh;
    height: 4vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
.cart-button:hover, .buy-button:hover {
    opacity: 0.8;
    background-color: #EE1313;
}

        .btn {
            color: white;
            font-weight: bold;
        }

        .cart-button {
            background-color: #EE1313;
        }

        .buy-button {
            background-color: #EE1313;
        }


        .cart-button:hover,
        .buy-button:hover {
            opacity: 0.8;
            background-color: #EE1313;
        }
    </style>

    <!--Main Contenet-->
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image">
                            <img style="max-width: 100%; max-height: 50vh; margin: auto;" class="rounded-4 fit"
                                src="/images/capsicum-1.png" />
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-4\3">
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2" src="/images/capsicum-2.jfif" />
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2" src="/images/capsicum-3.jfif" />
                        </a>
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image"
                            class="item-thumb">
                            <img width="60" height="60" class="rounded-2" src="/images/capsicum-4.jfif" />
                        </a>
                    </div>
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <p>
                            Fruits and Vegetables
                        </p>
                        <div>
                            <h3 class="font-weight-bold">
                                Capsicum
                            </h3>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                            elit hendrerit viverra. Pellentesque venenatis leo nec libero
                            condimentum tellus dapibus. Vestibulum felis nunc, auctor,
                            condimentum tristique magna. Cras eleifend, ipsum at ven
                            urna urna iaculis magna, sit amet posuere nunc libero eu eros. Aenean nec scelerisque urna, at
                            condimentum urna.Suspendisse vitae orci et elit facilisis faucibus. Donec ac sodales turpis.
                            Morbi in ipsum quis enim venenatis congue
                            vitae quis magna. Quisque tempus placerat aliquet. Fusce a odio nec magna pulvinar convallis.
                        </p>

                        <div class="mb-3">
                            <span class="h5">KSh 350</span>
                            <span class="text-muted">/per Kg</span>
                        </div>
                        <label class="mb-2 d-block">Quantity</label>
                        <div class="product-quantity input-group mb-3">
                            <div class=" input-group-prepend">
                                <span class="input-group-text btn-number" data-field="quantity" data-type="minus">-</span>
                            </div>
                            <input type="text" class="form-control quantity-input" name="quantity" value="1"
                                min="1" max="50">
                            <div class="input-group-append">
                                <span class="input-group-text btn-number" data-field="quantity" data-type="plus">+</span>
                            </div>
                        </div>
                        <div class="button-container mt-3">
                            <a href="#" class="btn-primary buy-button btn-warning shadow-0 text-white">Buy now</a>
                            <a href="#" class="btn-primary cart-button btn-danger shadow-0 text-white"><i class="me-1 fa fa-shopping-basket"></i>Add to cart</a>
                        </div>
                    </div>
            </div>
         </div>

        </div>
        </div>
        </main>
        </div>
        </div>
    </section>

    <!-- Script To Add Or Reduce Quantity -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var plusBtn = document.querySelector('.input-group-text[data-type="plus"]');
            var minusBtn = document.querySelector('.input-group-text[data-type="minus"]');
            var input = document.querySelector('.form-control');

            plusBtn.addEventListener('click', function(e) {
                e.preventDefault();
                var currentValue = parseInt(input.value);
                var maxValue = parseInt(input.getAttribute('max'));
                if (currentValue < maxValue) {
                    input.value = currentValue + 1;
                }
            });

            minusBtn.addEventListener('click', function(e) {
                e.preventDefault();
                var currentValue = parseInt(input.value);
                var minValue = parseInt(input.getAttribute('min'));
                if (currentValue > minValue) {
                    input.value = currentValue - 1;
                }
            });
        });
    </script>
@endsection
