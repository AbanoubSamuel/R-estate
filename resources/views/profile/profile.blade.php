<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  {{-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png"> --}}
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Paper Dashboard 2 by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <link href="{{ Url ('https://fonts.googleapis.com/css?family=Montserrat:400,700,200')}}" rel="stylesheet" />
  <link href="{{ Url('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" rel="stylesheet">
  {{-- <!-- CSS Files -->    <link rel="stylesheet" href="{{ Url('dash_css/dash.css') }}" /> --}}
  <link href="{{ Url('css/bootstrap.min.css" rel="stylesheet') }}" rel="stylesheet"/>
  <link href="{{ Url('css/bootstrap.min.css.map" rel="stylesheet') }}" rel="stylesheet"/>
  <link href="{{ Url ('css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <link href="{{ Url ('css/paper-dashboard.css.map')}}" rel="stylesheet" />
  <link href="{{ Url ('css/paper-dashboard.main.css')}}" rel="stylesheet" />
  <link href="{{ Url ('css/demo.css')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{Url ('css/demo.css" rel="stylesheet')}}" />
</head>
<body class="">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar scroll</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Your Logo
          <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href=" {{route('properities.index') }}">
              <p>properities</p>
            </a>
          </li>
          <div class="sidebar-wrapper">
            <ul class="nav">
              <li class="active ">
                <a href ="{{route('properities.create')}}">
                  <p> Add new property</p>
                </a>
              </li>
          <li>
            <a href="javascript:;">
              <p>profile</p>
            </a>
          </li>
          <li>
     
           <a href="{{route('profile',['data'=>Auth::user()]) }}">
              
              <p>Edite profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      
            <div class="credits ml-auto">
              <span class="copyright">
                © 2022, made with <i class="fa fa-heart heart"></i> by FAAA Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
</body>

</html>
</body>

</html>
