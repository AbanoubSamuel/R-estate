@extends('template')
@section('nav')
@endsection
@guest
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{Url('error/error.css')}}">
    <title>Document</title>
</head>

<body class="container" style="text-align: center;">
  <div class="mars"></div>
  <img src="https://assets.codepen.io/1538474/404.svg" class="logo-404" />
  <img src="https://assets.codepen.io/1538474/meteor.svg" class="meteor" />
  <p class="title">Oh no!!</p>
  <p class="subtitle">
      Please  <br /> SignUp!.
  </p>
  <div style="align-center">
      <a class="btn-back" href="{{Url('login')}}">SignUp!</a>
  </div>
  <img src="https://assets.codepen.io/1538474/astronaut.svg" class="astronaut" />
  <img src="https://assets.codepen.io/1538474/spaceship.svg" class="spaceship" />

<script src="{{Url('error/error.js')}}"></script>
</body>
@else
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <!-- <div class="container"> -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
          class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="index.html">REstate</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.html" class="page-scroll">HOME</a></li>
        <li><a href="results.html" class="page-scroll">FEED</a></li>
        <li><a href="#portfolio" class="page-scroll">DASHBOARD</a></li>
        <li><a href="./aff2/FAA1/login.html" class="page-scroll">LOGIN</a></li>
      </ul>
    </div>
    </div>
  </nav>
  <!-- ===========================Results============================== -->
  <div id="services">
    <div class="container">
    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-6">
          <div class="service-media"> <img src="/storage/{{$item['image']}}"/></div>
          <div class="service-desc">
            <h3>{{$item['name']}}</h3>
            <p>{{$item['desc']}}</p>
            <button id="open" class="btn border border-radious bg-success"><a href="{{Url('show')}}">More Info</a>
              </button>
            {{-- <div class="row no-gutters">
              <div class="model-container" id="model_container">
                <div class="model row">
                  <div class="leftSide">
                    <img src="./img/services/service-2.jpg">
                  </div>
                </div>
                <div class="model row">
                  <div class="rightSide">
                    <h1>First Place</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
                      voluptate! Similique assumenda dignissimos libero doloremque, molestias
                      reprehenderit eaque qui unde quas? Placeat, obcaecati illo! Aliquam neque
                      sed fugit eius quidem.
                    </p>
                    <button id="close" class="btn border border-radious bg-success">Less info</button>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
        @endforeach
        
       
       

      {{-- </div>
      <div class="row">
        <div class="col-md-6">
          <div class="service-media"> <img src="img/services/service-4.jpg" alt=" "> </div>
          <div class="service-desc">
            <h3>Place Info</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam
              sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
            <button id="open" class="btn border border-radious bg-success">More Info</button>
            <div class="model-container" id="model_container">
              <div class="model">
                <h1>First Place</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
                  voluptate! Similique assumenda dignissimos libero doloremque, molestias
                  reprehenderit eaque qui unde quas? Placeat, obcaecati illo! Aliquam neque
                  sed fugit eius quidem.
                </p>
                <button id="close" class="btn border border-radious bg-success">Less info</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="service-media"> <img src="img/services/service-5.jpg" alt=" "> </div>
          <div class="service-desc">
            <h3>Place Info</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam
              sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
            <button id="open" class="btn border border-radious bg-success">More Info</button>
            <div class="model-container" id="model_container">
              <div class="model">
                <h1>First Place</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
                  voluptate! Similique assumenda dignissimos libero doloremque, molestias
                  reprehenderit eaque qui unde quas? Placeat, obcaecati illo! Aliquam neque
                  sed fugit eius quidem.
                </p>
                <button id="close" class="btn border border-radious bg-success">Less info</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="service-media"> <img src="img/services/service-6.jpg" alt=" "> </div>
            <div class="service-desc">
              <h3>Place Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare
                diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
              <button id="open" class="btn border border-radious bg-success">More Info</button>
              <div class="model-container" id="model_container">
                <div class="model">
                  <h1>First Place</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
                    voluptate! Similique assumenda dignissimos libero doloremque, molestias
                    reprehenderit eaque qui unde quas? Placeat, obcaecati illo! Aliquam neque
                    sed fugit eius quidem.
                  </p>
                  <button id="close" class="btn border border-radious bg-success">Less info</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-media"> <img src="img/services/service-6.jpg" alt=" "> </div>
            <div class="service-desc">
              <h3>Place Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare
                diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
              <button id="open" class="btn border border-radious bg-success">More Info</button>
              <div class="model-container" id="model_container">
                <div class="model">
                  <h1>First Place</h1>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit,
                    voluptate! Similique assumenda dignissimos libero doloremque, molestias
                    reprehenderit eaque qui unde quas? Placeat, obcaecati illo! Aliquam neque
                    sed fugit eius quidem.
                  </p>
                  <button id="close" class="btn border border-radious bg-success">Less info</button>
                </div>
              </div>
            </div>
          </div> --}}

        </div>
      </div>
    </div>
    <div id="contact">
      <div class="container">
        <div class="col-md-8">
          <div class="row">
            <div class="section-title">
              <h2>Get In Touch</h2>
              <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
            </div>
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message"
                  required></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div id="success"></div>
              <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
            </form>
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1 contact-info">
          <div class="contact-item">
            <h4>Contact Info</h4>
            <p><span>Address</span>Egypy, Aswan</p>
          </div>
          <div class="contact-item">
            <p><span>Phone</span> +1 123 456 1234</p>
          </div>
          <div class="contact-item">
            <p><span>Email</span> info@REstate.com</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="social">
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Section -->
    <div id="footer">
      <div class="container text-center">
        <p>&copy; 2022 REstate. Design by <a href="http://www.templatewire.com" rel="nofollow">FAAA</a></p>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/contact_me.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
@endguest
