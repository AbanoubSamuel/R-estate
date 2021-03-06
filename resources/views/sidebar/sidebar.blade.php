@auth

                        @if (Auth::user()->isAdmin == 'Admin')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sidebar</title>
        <link rel="stylesheet" href="{{ Url('sidebar/sidebar.css') }}">
    </head>

    <body>
        <div class="area"></div>
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="{{ Url('home') }}">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Home Page
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="{{ Url('properities') }}">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Advertisments
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="{{ Url('usersTable') }}">
                        <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Users
                        </span>
                    </a>

                </li>
                <li class="has-subnav">
                    <a href="{{ Url('advertiser') }}">
                        <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Advertiser
                        </span>
                    </a>

                </li>

                <li class="has-subnav">
                    <a href="{{ Url('showuser') }}">
                        <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Result
                        </span>
                    </a>

                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graphs and Statistics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                            Quotes
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                    <a href="logout">
                        <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </body>


</html>
@yield('sidebar')
@endif
@endauth
                