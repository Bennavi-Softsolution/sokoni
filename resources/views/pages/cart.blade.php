@extends('layouts.app2')
@section('title', 'shopping cart')


    <?php
    session_start();
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    // Function to add item to cart
    function addItem($item)
    {
        array_push($_SESSION['cart'], $item);
    }
    
    // Function to remove item from cart
    function removeItem($itemId)
    {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $itemId) {
                unset($_SESSION['cart'][$key]);
                break;
            }
        }
    }
    
    // Function to update item quantity
    function updateItemQuantity($itemId, $quantity)
    {
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $itemId) {
                $item['quantity'] = $quantity;
                break;
            }
        }
    }
    
    // Handling form submissions
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['add_to_cart'])) {
            $item = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
            ];
            addItem($item);
        } elseif (isset($_POST['remove'])) {
            removeItem($_POST['id']);
        } elseif (isset($_POST['update_quantity'])) {
            updateItemQuantity($_POST['id'], $_POST['quantity']);
        }
    }
    ?>


    

        <div class="cart-item d-flex justify-content-between align-items-center my-3">
            <img src="{{ asset('../images/p5.jpg') }}" alt="Sneakers">
            <div class="item-details flex-fill ms-3">
                <h3>SwiftGlide Slip-On Sneakers</h3>
                <p>SwiftGlide Slip-On Sneakers: Effortless style meets comfort with these
                    versatile slip-ons, perfect for everyday wear.</p>
                <p><strong>Price:</strong> KES 999</p>
                <p><strong>Item:</strong> 1234</p>
                <div class="quantity d-flex align-items-center">
                    <label for="quantity" class="me-2"><strong>Quantity:</strong></label>
                    <div class="product-quantity input-group mb-3">
                        <div class=" input-group-prepend">
                            <span class="input-group-text btn-custom" data-field="quantity" data-type="minus">-</span>
                        </div>
                        <input type="text" class="form-control quantity-input" name="quantity" value="1"
                            min="1" max="50">
                        <div class="input-group-append">
                            <span class="input-group-text btn-custom" data-field="quantity" data-type="plus">+</span>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#" class="text-custom">
                        Available offer to save you money</di>
                    </a>
                </div>
                <button class="remove btn btn-custom ms-3">
                    <i class="bi bi-trash"></i> REMOVE</button>
            </div>
        </div>

        <div class="recommendations">
            <h2>Products You May Like</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active single-item">
                        <div class="d-flex justify-content-center">
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p2.jpg') }}" alt="GripMax">
                                <h4>GripMax Trail Hiking Boots. waterproof</h4>
                                <p>Durable and rugged boots designed for the toughest trails.</p>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <div class="price-and-cart">
                                    <p><strong>Price:</strong> KES 1,799</p> &nbsp;
                                    <button class="add-to-cart btn btn-custom">Add to Cart</button>
                                </div>
                            </div>

                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p8.jpg') }}" alt="VentureTrack">
                                <h4>VentureTrack Trail Running Shoes</h4>
                                <p>Lightweight and comfortable shoes perfect for trail running.</p>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                </div>
                                <div class="price-and-cart">
                                    <p><strong>Price:</strong> KES 7,999</p> &nbsp;
                                    <button class="add-to-cart btn btn-custom">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item single-item">
                        <div class="d-flex justify-content-center">
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/sneakers.jpg') }}" alt="Sneakers">
                                <h4>Men's casual sneakers white shoes</h4>
                                <p>Stylish and comfortable sneakers for everyday wear.</p>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <div class="price-and-cart">
                                    <p><strong>Price:</strong> KES 2,999</p> &nbsp;
                                    <button class="add-to-cart btn btn-custom">Add to Cart</button>
                                </div>
                            </div>

                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p3.jpg') }}" alt="UrbanFlex">
                                <h4>UrbanFlex Laced Official Shoe</h4>
                                <p>Perfect shoes for a professional look and comfortable fit.</p>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <div class="price-and-cart">
                                    <p><strong>Price:</strong> KES 1,499</p> &nbsp;
                                    <button class="add-to-cart btn btn-custom">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item single-item">
                        <div class="d-flex justify-content-center">
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p21.jpg') }}" alt="OfficialShoe">
                                <h4>Mens Black Laced Official Shoe</h4>
                                <p>Elegant and comfortable black laced shoe for formal occasions.</p>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <div class="price-and-cart">
                                    <p><strong>Price:</strong> KES 2,499</p> &nbsp;
                                    <button class="add-to-cart btn btn-custom">Add to Cart</button>
                                </div>
                            </div>

                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p4.jpg') }}" alt="OfficialShoe">
                                <h4>Mens Brown Laced Official Shoe</h4>
                                <p>Stylish and durable brown laced shoe for formal occasions.</p>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <div class="price-and-cart">
                                    <p><strong>Price:</strong> KES 2,499</p> &nbsp;
                                    <button class="add-to-cart btn btn-custom">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item single-item">
                        <div class="d-flex justify-content-center">
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p7.jpg') }}" alt="TrekkingSandals">
                                <h4>SummitVenture Trekking Sandals</h3>
                                <p>Durable and comfortable sandals for trekking and hiking.</p>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <div class="price-and-cart">
                                    <p><strong>Price:</strong> KES 9,999</p> &nbsp;
                                    <button class="add-to-cart btn btn-custom">Add to Cart</button>
                                </div>
                            </div>
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p20.jpg') }}" alt="CasualSneakers">
                                <h4>Casual Sneakers Sport Shoes</h3>
                                <p>Versatile and stylish sneakers for casual and sporty outfits.</p>
                                <div class="rating">
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9733;</span>
                                    <span class="star">&#9734;</span>
                                </div>
                                <div class="price-and-cart">
                                    <p><strong>Price:</strong> KES 2,999</p> &nbsp;
                                    <button class="add-to-cart btn btn-custom">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <img src="{{ asset('../images/prev.jpg') }}">
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <img src="{{ asset('../images/next.jpg') }}">
                </button>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var plusBtn = document.querySelector('.input-group-text[data-type="plus"]');
            var minusBtn = document.querySelector('.input-group-text[data-type="minus"]');
            var input = document.querySelector('.quantity-input');

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
        // Auto-slide the carousel every 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = document.querySelector('#carouselExampleIndicators');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000
            });
        });
        
        // Close button functionality for the added-to-basket section
        document.querySelector('.added-to-basket .close').addEventListener('click', function() {
            document.querySelector('.added-to-basket').style.display = 'none';
        });
    </script>

