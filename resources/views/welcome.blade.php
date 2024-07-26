@extends('layouts.app2')
@extends('pages.navbar')

@section('title', 'Sokoni')

@section('welcome')
    <!-- Styles -->
    <style>
        /* Container styles */
        .container-fluid {
            display: flex;
            gap: 30px;
            /* Increased gap for a more spacious layout */
        }

        /* Sidebar styling */
        .sidebar {
            width: 270px;
            padding: 20px;
            position: sticky;
            top: 20px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            background: linear-gradient(135deg, #ee1313 0%, #ff6f6f 100%);
            /* Gradient background for vibrant look */
            z-index: 1;
        }

        .sidebar:hover {
            transform: translateX(20px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            /* Enhanced shadow on hover */
        }

        .scrollable-sidebar {
            overflow-y: auto;
            max-height: calc(100vh - 120px);
            padding-right: 10px;
            /* Added padding for scrollbar */
        }

        /* Navigation link styles */
        .nav-pills .nav-link {
            color: #fff;
            padding: 12px 20px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            transition: all 0.4s ease;
            border-radius: 8px;
            border: 1px solid transparent;
            background: rgba(255, 255, 255, 0.1);
            /* Subtle background for non-active links */
            backdrop-filter: blur(10px);
            /* Frosted glass effect */
        }

        .nav-pills .nav-link i {
            margin-right: 15px;
            transition: color 0.4s ease;
        }

        .nav-pills .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #ee1313;
            
            /* Slightly scale up on hover */
        }

        .nav-pills .nav-link.active {
            background-color: #fff;
            color: #ee1313;
            border-color: #ee1313;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            /* Box shadow for active link */
        }

        #myTab.nav-pills {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            /* Padding for content area */
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            /* Shadow for main content area */
        }

        @media (max-width: 768px) {
            .container-fluid {
                flex-direction: column;
                gap: 0;
            }

            .sidebar {
                width: 100%;
                padding: 15px;
                margin-bottom: 20px;
            }

            #myTab.nav-pills {
                flex-direction: row;
                flex-wrap: nowrap;
            }
        }

        .rating-stars {
            color: #ffd700;
        }

        .scrollable-sidebar {
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        /* Dark mode adjustments */
        @media (prefers-color-scheme: dark) {
            .sidebar {
                background: linear-gradient(135deg, #1c1c1c 0%, #333 100%);
                color: #eaeaea;
                /* Dark gradient background */
            }

            .nav-pills .nav-link {
                color: #eaeaea;
                background: rgba(0, 0, 0, 0.2);
                /* Darker background for non-active links */
            }

            .nav-pills .nav-link:hover {
                background: rgba(0, 0, 0, 0.3);
                color: #ee1313;
            }

            .nav-pills .nav-link.active {
                background-color: #333;
                color: #ee1313;
                border-color: #ee1313;
            }
        }
    </style>

    <div class="container-fluid mt-3">
        <!-- Sidebar container (first column) -->
        <div class="sidebar">
            <div class="scrollable-sidebar">
                <ul id="myTab" class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#shoes">
                            <i class="fas fa-shoe-prints"></i> Shoes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#watches">
                            <i class="fas fa-clock"></i> Watches
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#accessories">
                            <i class="fas fa-headphones"></i> Accessories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#electronics">
                            <i class="bi bi-joystick"></i> Sporting Goods
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#toys">
                            <i class="bi bi-car-front-fill"></i> Toys
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#handb">
                            <i class="fas fa-headphones"></i> Health & Beauty
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#homedecor">
                            <i class="bi bi-shuffle"></i> Home Decor
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main content container (second column) -->
        <div class="main-content">
            @yield('main-content')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTab a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>
@endsection
