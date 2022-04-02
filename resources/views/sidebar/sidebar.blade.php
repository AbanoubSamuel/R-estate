@auth

                        @if (Auth::user()->isAdmin == 'Admin')
{{-- @guest
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ Url('error/error.css') }}">
        <title>Document</title>
    </head>
    <<<<<<< HEAD <body class="container" style="text-align: center;">
        <div class="mars"></div>
        <img src="https://assets.codepen.io/1538474/404.svg" class="logo-404" />
        <img src="https://assets.codepen.io/1538474/meteor.svg" class="meteor" />
        <p class="title">Oh no!!</p>
        <p class="subtitle">
            Please <br /> SignUp!.
        </p>
        <div style="align-center">
            <a class="btn-back" href="{{ Url('login') }}">SignUp!</a>
        </div>
        <img src="https://assets.codepen.io/1538474/astronaut.svg" class="astronaut" />
        <img src="https://assets.codepen.io/1538474/spaceship.svg" class="spaceship" />

        <script src="{{ Url('error/error.js') }}"></script>
        </body>

    </html>
@else --}}
    <!DOCTYPE html>
    =======

    <body class="container" style="text-align: center;">
        <div class="mars"></div>
        <img src="https://assets.codepen.io/1538474/404.svg" class="logo-404" />
        <img src="https://assets.codepen.io/1538474/meteor.svg" class="meteor" />
        <p class="title">Oh no!!</p>
        <p class="subtitle">
            Please <br /> SignUp!.
        </p>
        <div style="align-center">
            <a class="btn-back" href="{{ Url('login') }}">SignUp!</a>
        </div>
        <img src="https://assets.codepen.io/1538474/astronaut.svg" class="astronaut" />
        <img src="https://assets.codepen.io/1538474/spaceship.svg" class="spaceship" />

        <script src="{{ Url('error/error.js') }}"></script>
    </body>
@else
    <!DOCTYPE html>
    >>>>>>> aa9fb6ce1121be0673867de83f7ad6b37a9f3999
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
@endif
                    @endauth