<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAAA</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img\favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img\apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img\apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home_css\bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="fonts\font-awesome\css\font-awesome.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('home_css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="home_css\nivo-lightbox\nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="home_css\nivo-lightbox\default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> </button>
                <a class="navbar-brand page-scroll" href="{{ url('home') }}">REstate</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('home') }}" class="page-scroll">HOME</a></li>


                    @if (Auth::check())
                        <li><a href="{{ url('result') }}" class="page-scroll">ADS</a></li>
                    @endif




                    @if (Auth::check())
                        <li><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a></li>
                    @endif


                    @auth

                        @if (Auth::user()->isAdmin == 'Admin')
                            <li><a class="nav-link" href="{{ 'admin_profile' }}">{{ __('Admin') }}</a></li>
                        @endif
                    @endauth


                    @guest

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @auth

                            @if (Auth::user()->isAdmin == 'Advertiser' or 'Admin')
                                <li><a href="/properities" class="page-scroll">DASHBOARD</a></li>
                            @endif
                        @endauth
                    @endguest
                    <!-- <li><a href="{{ url('Logout') }}" class="page-scroll">LOGOUT</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    @yield('nav')













    <!-- Authentication Links -->

    <script type="text/javascript" src="js\jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js\bootstrap.js"></script>
    <script type="text/javascript" src="js\SmoothScroll.js"></script>
    <script type="text/javascript" src="js\nivo-lightbox.js"></script>
    <script type="text/javascript" src="js\jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js\contact_me.js"></script>
    <script type="text/javascript" src="js\main.js"></script>
</body>

</html>
