<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAAA</title>
    <meta name="description" content="">
    <meta name="author" content="">
<<<<<<< HEAD
    herf ="{{ asset('img\favicon.ico') }}"
=======
    <link herf="{{ asset('img\favicon.ico') }}">
>>>>>>> aa9fb6ce1121be0673867de83f7ad6b37a9f3999
    <link rel="shortcut icon" href="{{ asset('img\favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img\apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img\apple-touch-icon-114x114.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home_css\bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts\font-awesome\css\font-awesome.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('home_css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home_css\nivo-lightbox\nivo-lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home_css\nivo-lightbox\default.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<<<<<<< HEAD
=======

    {{-- The addForm HTML --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('dash_css/dash.css') }}" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LooP</title>
>>>>>>> aa9fb6ce1121be0673867de83f7ad6b37a9f3999
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
                            <li><a class="nav-link" href="{{ 'sider' }}">{{ __('Admin') }}</a></li>
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

                            @if (Auth::user()->isAdmin == 'Advertiser' or Auth::user()->isAdmin == 'Admin')
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
