<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sokoni</a>
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
                        <button class="btn btn-outline-secondary me-3" type="submit">
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
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}"
                                class="nav-link btn btn-sm btn-outline-secondary me-2">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-sm btn-danger me-2">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="btn btn-sm btn-danger me-3">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            @endif

            </ul>

        </div>
    </div>
</nav>
<!-- Sign in modal ends here -->

@yield('cart')
@yield('checkout')
@yield('product')
@yield('location')
@yield('create')
