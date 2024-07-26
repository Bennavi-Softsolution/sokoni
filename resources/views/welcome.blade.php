@extends('layouts.app2')
@extends('pages.navbar')

@section('title', 'Sokoni')

@section('welcome')
    <!-- Styles -->
    <style>
        :root {
            --primary-color: #ee1313; /* Main accent color */
            --sidebar-gradient-start: #e2e2e2; /* Light gray gradient start */
            --sidebar-gradient-end: #ffffff; /* White gradient end */
            --sidebar-hover-bg: #f2f2f2; /* Subtle hover background */
            --sidebar-active-bg: #e0e0e0; /* Slightly darker background for active state */
            --text-color: #333; /* Dark text for readability */
            --border-color: #d1d1d1; /* Light border color */
            --shadow-color: rgba(0, 0, 0, 0.1); /* Light shadow for subtle depth */
            --transition-speed: 0.4s; /* Smooth transition speed */
            --radius: 12px; /* Rounded corners */
            --font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Elegant font */
        }

        body {
            font-family: var(--font-family);
            color: var(--text-color);
            background-color: #f9f9f9; /* Very light background for the overall page */
            margin: 0;
            padding: 0;
        }

        /* Container styles */
        .container-fluid {
            display: flex;
            gap: 20px;
            padding: 20px;
        }

        /* Sidebar styling */
        .sidebar {
            width: 300px;
            padding: 20px;
            position: sticky;
            top: 20px;
            transition: all var(--transition-speed) ease;
            box-shadow: 0 6px 12px var(--shadow-color);
            border-radius: var(--radius);
            background: linear-gradient(135deg, var(--sidebar-gradient-start), var(--sidebar-gradient-end)); /* Gradient background */
            border: 1px solid var(--border-color);
            overflow: hidden; /* Ensure the gradient looks good */
        }

        .sidebar:hover {
            transform: translateX(8px);
            box-shadow: 0 8px 16px var(--shadow-color);
        }

        .scrollable-sidebar {
            overflow-y: auto;
            max-height: calc(100vh - 120px);
            padding-right: 12px;
        }

        /* Navigation link styles */
        .nav-pills .nav-link {
            color: var(--text-color);
            padding: 14px 20px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            transition: all var(--transition-speed) ease;
            border-radius: var(--radius);
            border: 1px solid transparent;
            background: transparent; /* Clean look without background */
        }

        .nav-pills .nav-link i {
            margin-right: 14px;
            font-size: 1.2em;
            transition: color var(--transition-speed) ease;
        }

        .nav-pills .nav-link:hover {
            background: var(--sidebar-hover-bg);
            color: var(--primary-color);
            box-shadow: 0 4px 8px var(--shadow-color);
        }

        .nav-pills .nav-link.active {
            background-color: var(--sidebar-active-bg);
            color: var(--primary-color);
            border-color: var(--primary-color);
            box-shadow: 0 6px 12px var(--shadow-color);
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
            box-shadow: 0 6px 12px var(--shadow-color);
        }

        @media (max-width: 768px) {
            .container-fluid {
                flex-direction: column;
                gap: 20px;
            }

            .sidebar {
                width: 100%;
                padding: 15px;
                box-shadow: none;
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
                            <i class="fas fa-stopwatch"></i> Watches
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#accessories">
                            <i class="fas fa-glasses"></i> Accessories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#electronics">
                            <i class="fas fa-tv"></i> Electronics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#toys">
                            <i class="fas fa-gamepad"></i> Toys
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#handb">
                            <i class="fas fa-user-md"></i> Health & Beauty
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#homedecor">
                            <i class="fas fa-couch"></i> Home Decor
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
