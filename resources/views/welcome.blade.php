@extends('layouts.app2')
@extends('pages.navbar')
@section('title', 'Sokoni')

@section('welcome')
    <!-- Styles -->
    <style>
        /* Custom sidebar and nav-pills styles */
        .container-fluid {
            display: flex;
            gap: 20px;
            /* Gap between sidebar and main content */
        }

        .sidebar {
            width: 240px;
            padding: 20px;
            position: sticky;
            top: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 0 5px rgba(129, 110, 110, 0.3);
            border-radius: 10px;
            /* Smoother rounding */
            background-color: #f8f9fa;
            /* Light background color */
            z-index: 1;
            /* Ensure sidebar stays above main content */
        }

        .sidebar:hover {
            transform: translateX(5px);
            box-shadow: 0 0 10px rgba(129, 110, 110, 0.3);
            /* Darker shadow on hover */
        }

        .scrollable-sidebar {
            overflow-y: auto;
            max-height: calc(100vh - 120px);
        }

        .nav-pills .nav-link {
            color: #495057;
            padding: 10px 20px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-pills .nav-link i {
            margin-right: 10px;
        }

        .nav-pills .nav-link:hover {
            background-color: #e9ecef;
            color: #cecbcb;
        }

        .nav-pills .nav-link.active {
            background-color: #007bff;
            color: #fff;
            border-color: #007bff;
        }

        #myTab.nav-pills {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            /* Take remaining space */
            padding: 20px;


        }

        @media (max-width: 768px) {
            .container-fluid {
                flex-direction: column;
                /* Stack sidebar and main content vertically */
                gap: 0;
                /* No gap between sidebar and main content on small screens */
            }

            .sidebar {
                width: 100%;
                /* Full width sidebar on small screens */
                padding: 10px;
                margin-bottom: 20px;
                /* Optional: Add space below sidebar on small screens */
            }

            #myTab.nav-pills {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                /* Ensures items do not wrap on smaller screens */
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
                background-color: #343a40;
                /* Darker background color */
                color: #f8f9fa;
                /* Lighter text color */
            }

            .nav-pills .nav-link {
                color: #f8f9fa;
                /* Lighter text color */
            }

            .nav-pills .nav-link:hover {
                background-color: #495057;
                /* Darker background color on hover */
            }

            .nav-pills .nav-link.active {
                background-color: #6c757d;
                /* Darker active background color */
            }
        }
    </style>


    <div class="container-fluid mt-3">
        <!-- Sidebar container (first column) -->
        <div class="sidebar">
            <div class="scrollable-sidebar">
                <ul id="myTab" class="nav nav-pills gap-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#shoes"><i class="fas fa-shoe-prints"></i>
                            Shoes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#watches"><i class="fas fa-clock"></i> Watches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#accessories"><i class="fas fa-headphones"></i> Accessories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#electronics"><i class="bi bi-joystick"></i> Sporting Goods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Toys"><i class="bi bi-car-front-fill"></i> Toys</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#handb"><i class="fas fa-headphones"></i> Health & Beauty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#homedecor"><i class="bi bi-shuffle"></i> Home Decor</a>
                    </li>


                    <!-- Add more items as needed -->
                </ul>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize Bootstrap tabs
            $('#myTab a').on('click', function(e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>
@endsection
