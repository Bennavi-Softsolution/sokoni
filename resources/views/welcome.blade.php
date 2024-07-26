@extends('layouts.app2')
@extends('pages.navbar')

@section('title', 'Sokoni')

@section('welcome')
    <!-- Styles -->
    <style>
        :root {
            --primary-color: #ee1313;
            --secondary-color: #f5f5f5;
            --hover-bg-color: rgba(0, 0, 0, 0.05);
            --active-bg-color: #eee;
            --text-color: #333;
            --border-color: #ddd;
            --shadow-color: rgba(0, 0, 0, 0.2);
            --transition-speed: 0.3s;
            --radius: 12px;
        }

        /* Container styles */
        .container-fluid {
            display: flex;
            gap: 30px;
            padding: 20px;
            /* Added padding for a more polished look */
        }

        /* Sidebar styling */
        .sidebar {
            width: 300px;
            padding: 20px;
            position: sticky;
            top: 20px;
            transition: all var(--transition-speed) ease;
            box-shadow: 0 8px 16px var(--shadow-color);
            border-radius: var(--radius);
            background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
            /* Elegant gradient background */
            z-index: 1;
        }

        .sidebar:hover {
            transform: translateX(8px);
            box-shadow: 0 12px 24px var(--shadow-color);
            /* Subtle hover effect */
        }

        .scrollable-sidebar {
            overflow-y: auto;
            max-height: calc(100vh - 120px);
            padding-right: 10px;
        }

        /* Navigation link styles */
        .nav-pills .nav-link {
            color: var(--text-color);
            padding: 12px 20px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            transition: background-color var(--transition-speed) ease, color var(--transition-speed) ease;
            border-radius: var(--radius);
            border: 1px solid transparent;
            background: rgba(0, 0, 0, 0.05);
            /* Subtle background for non-active links */
        }

        .nav-pills .nav-link i {
            margin-right: 12px;
            font-size: 1.2em;
        }

        .nav-pills .nav-link:hover {
            background: var(--hover-bg-color);
            color: var(--primary-color);
            
            /* Slight scale effect on hover */
        }

        .nav-pills .nav-link.active {
            background-color: var(--active-bg-color);
            color: var(--primary-color);
            border-color: var(--primary-color);
            box-shadow: 0 4px 8px var(--shadow-color);
            /* Elegant shadow for active link */
        }

        #myTab.nav-pills {
            display: flex;
            flex-direction: column;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            border-radius: var(--radius);
            box-shadow: 0 4px 12px var(--shadow-color);
            /* Shadow for main content area */
        }

        @media (max-width: 768px) {
            .container-fluid {
                flex-direction: column;
                gap: 0;
                padding: 10px;
            }

            .sidebar {
                width: 100%;
                padding: 15px;
                box-shadow: none;
                /* Remove shadow on smaller screens */
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
            :root {
                --primary-color: #ff5a5f;
                --hover-bg-color: rgba(255, 255, 255, 0.1);
                --active-bg-color: #333;
                --text-color: #eaeaea;
                --border-color: #444;
                --shadow-color: rgba(0, 0, 0, 0.4);
            }

            .sidebar {
                background: linear-gradient(135deg, #1c1c1c 0%, #333 100%);
                color: var(--text-color);
            }

            .nav-pills .nav-link {
                color: var(--text-color);
                background: rgba(0, 0, 0, 0.1);
            }

            .nav-pills .nav-link:hover {
                background: var(--hover-bg-color);
                color: var(--primary-color);
            }

            .nav-pills .nav-link.active {
                background-color: var(--active-bg-color);
                color: var(--primary-color);
                border-color: var(--primary-color);
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
