<style>
/*
.navbar-brand {
    font-family: 'Comic Sans MS', cursive, sans-serif;
    font-size: 32px;
    font-weight: bold;
    color: #ff6347; /* Tomato color for a playful look */
/*    text-transform: uppercase;
    letter-spacing: 2px;
    padding: 12px 18px;
    border: 3px dashed #ff6347; /* Dashed border for a playful touch */
/*    border-radius: 5px; /* Rounded corners for the border */
/*    transition: color 0.3s ease, border-color 0.3s ease;
}

.navbar-brand:hover {
/*    color: #20b2aa; /* Light sea green color on hover */
/*    border-color: #20b2aa; /* Change border color on hover */
/*
}
*/

</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Sokoni</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="container mt-3">
                <form class="d-flex">
                    <div class="input-group">
                        <input class="form-control border-secondary" type="search" placeholder="I am shopping for..."
                            aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link me-4" href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </li>
            </ul>

            @if (Route::has('login'))
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <h6>
                                    <small class="text-body-secondary ms-3">Manage Account</small>
                                </h6>
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('api-tokens.index') }}">API Tokens</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-primary me-2">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="btn btn-sm btn-primary me-3">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif
        </div>
    </div>
</nav>

@yield('cart')
@yield('checkout')
@yield('product')
@yield('location')
@yield('create')
