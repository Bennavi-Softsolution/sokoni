@extends('layouts.app2')
@extends('pages.navbar')
@section('title', 'Checkout')

@section('checkout')
<style>
    /* Custom CSS for animations */
    @keyframes slideInFromLeft {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .slide-in-from-left {
        animation: slideInFromLeft 0.5s ease-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .fade-in {
        animation: fadeIn 0.5s ease-out;
    }

    /* Custom modal animation */
    .modal.fade .modal-dialog {
        transform: translate(0, -50%);
        transition: transform 0.3s ease-out;
    }

    .modal.fade.show .modal-dialog {
        transform: translate(0, 0);
    }

    /* Custom button hover effect */
    .btn-custom-effect {
        transition: transform 0.3s ease-out, box-shadow 0.3s ease-out;
    }

    .btn-custom-effect:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Custom input focus effect */
    .form-control-custom {
        transition: border-color 0.3s ease-out, box-shadow 0.3s ease-out;
    }

    .form-control-custom:focus {
        border-color: #EE1313;
        box-shadow: 0 0 0 0.2rem rgba(238, 19, 19, 0.25);
    }

    .payment-card {
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .payment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .form-control-address {
        background-color: #f0f0f0;
        border: 1px solid #acc;
    }
</style>

<div class="container mt-4">
    <div class="card mb-4 slide-in-from-left fade-in">
        <div class="card-body">
            <h2 class="card-title fw-bold">ORDER SUMMARY</h2>
            <div class="row mb-2">
                <div class="col-md-6">Items’ total (x)</div>
                <div class="col-md-6 text-md-end">Kshs. x</div>
            </div>
            <div class="row mb-2">
                <div class="col-md-6">Delivery Fees</div>
                <div class="col-md-6 text-md-end">Kshs. x</div>
            </div>
        </div>
    </div>

    <div class="card mb-4 slide-in-from-left fade-in">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="fw-bold">Total:</h2>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <h2 class="fw-bold">Kshs. x</h2>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-9">
                    <input type="text" placeholder="Enter Code Here" class="form-control form-control-custom">
                </div>
                <div class="col-3">
                    <button class="btn btn-danger rounded-end-circle btn-custom-effect">APPLY</button>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 slide-in-from-left fade-in">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="fw-bold">PAYMENT METHOD</h2>
                </div>
                <div class="col text-end">
                    <button type="button" class="btn btn-danger btn-custom-effect" data-bs-toggle="modal"
                        data-bs-target="#paymentModal">
                        CHANGE
                    </button>
                </div>
            </div>
            <div class="row mt-2 p-2 border rounded">
                <div class="col-auto">
                    <img src="images/Get Cash.png" alt="payment-method" class="me-2">
                </div>
                <div class="col">
                    <span>Pay Now (M-pesa, Airtel, or Bank Cards)</span>
                </div>
            </div>

            <!-- Modal for Payment Options -->
            <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="paymentModalLabel">Payment Options</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card payment-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Pay Now</h5>
                                            <p class="card-text">Pay immediately using your preferred payment
                                                method.</p>
                                            <img src="{{ asset('images/payment-forms.png') }}" class="card-img-top"
                                                alt="an image">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod"
                                                    id="payNowRadio" value="payNow">
                                                <label class="form-check-label" for="payNowRadio">
                                                    Select Pay Now
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card payment-card">
                                        <div class="card-body">
                                            <h5 class="card-title">Pay on Delivery</h5>
                                            <p class="card-text">Pay when your order is delivered to your doorstep.
                                            </p>
                                            <img src="{{ asset('images/payment-forms.png') }}" class="card-img-top"
                                                alt="an image">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="paymentMethod"
                                                    id="payOnDeliveryRadio" value="payOnDelivery">
                                                <label class="form-check-label" for="payOnDeliveryRadio">
                                                    Select Pay on Delivery
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-custom" id="confirmPaymentBtn">Select
                                Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 slide-in-from-left fade-in">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="fw-bold">ADDRESS</h2>
                </div>
                <div class="col text-end">
                    <button id="changeAddressBtn" class="btn btn-danger btn-custom-effect" data-bs-toggle="modal"
                        data-bs-target="#addressModal">
                        CHANGE YOUR ADDRESS
                    </button>
                </div>
            </div>
            <div class="row mt-2 p-2 border rounded">
                <div class="col-auto">
                    <img src="images/Place Marker.png" alt="address" class="me-2">
                </div>
                <div class="col">
                    <p>Lista Mng’ei</p>
                    <p>2500-30100</p>
                    <p>Eldoret</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Address Change -->
    <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addressModalLabel">Change Your Address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="p-4">
                            <input type="text" placeholder="First Name"
                                class="form-control form-control-custom mb-3">
                            <input type="text" placeholder="Last Name"
                                class="form-control form-control-custom mb-3">
                            <div class="row mb-3">
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <button class="btn bg-custom-black btn-danger text-white dropdown-toggle"
                                            type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            +254
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Phone Number"
                                        class="form-control custom-input placeholder-white" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-auto">
                                    <div class="dropdown">
                                        <button class="btn btn-danger text-white dropdown-toggle" type="button"
                                            id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            +254
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="text" placeholder="Additional Phone Number"
                                        class="form-control custom-input placeholder-white" />
                                </div>
                            </div>
                            <input type="text" placeholder="Address"
                                class="form-control form-control-custom mb-3">
                            <input type="text" placeholder="Postal Code"
                                class="form-control form-control-custom mb-3">
                            <input type="text" placeholder="Region" class="form-control form-control-custom mb-3">
                            <input type="text" placeholder="City" class="form-control form-control-custom mb-3">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal for Address Change -->
    <div class="card mb-4 slide-in-from-left fade-in">
        <div class="card-body">
            <h2 class="fw-bold">DELIVERY</h2>
            <div class="p-4 border rounded">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="images/Get Cash.png" alt="delivery" class="me-2">
                    </div>
                    <div class="col">
                        <p class="fw-bold">Pick-up Station</p>
                        <p>Delivery between 09-Jul and 10-Jul</p>
                    </div>
                </div>
            </div>
            <div class="mt-4 p-4 border rounded">
                <div class="row align-items-center">
                    <div class="col">
                        <span>Pick-up station</span>
                    </div>
                    <div class="col text-end">
                        <button class="btn btn-danger btn-custom-effect">Select Pick-up station &gt;</button>
                    </div>
                </div>
                <div class="row mt-2 p-2 border rounded">
                    <div class="col-auto">
                        <img src="images/Palm Up Hand.png" alt="pick-up-station" class="me-2">
                    </div>
                    <div class="col">
                        <p>Eldoret Station</p>
                        <p>Eldoret Station Daima towers 5th floor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 slide-in-from-left fade-in">
        <div class="card-body">
            <h2 class="fw-bold">Modify CART</h2>
            <p class="text-center"><a href="#" class="text-primary"> &lt; Go back & continue Shopping</a></p>
        </div>
    </div>

    <div class="card slide-in-from-left mb-3 fade-in">
        <div class="card-body">
            <button class="btn btn-danger p-2 rounded w-100 fw-bold btn-custom-effect">CONFIRM ORDER</button>
        </div>
    </div>
</div>

<script>
    // Smooth card hover effect
    document.querySelectorAll('.payment-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.classList.add('shadow-lg'); // Add a larger shadow on hover
        });

        card.addEventListener('mouseleave', function() {
            this.classList.remove('shadow-lg'); // Remove the shadow on mouse leave
        });
    });

    // Handle confirmation button click
    document.getElementById('confirmPaymentBtn').addEventListener('click', function() {
        var selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
        if (selectedPaymentMethod) {
            console.log('Selected payment method:', selectedPaymentMethod.value);
            // You can add further actions here, e.g., submitting a form, closing the modal, etc.
            $('#paymentModal').modal('hide'); // Close the modal using jQuery
        } else {
            alert('Please select a payment method.');
        }
    });
</script>
@endsection