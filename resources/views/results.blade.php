@extends('template')
@section('nav')
@endsection

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        <nav id="menu" class="navbar navbar-default navbar-fixed-top">
            <!-- <div class="container"> -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span> </button>
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
                            <div class="service-media"> <img src="/storage/{{ $item['image1'] }}" /></div>
                            <div class="service-desc">
                                <h3>{{ $item['name'] }}</h3>
                                <p>{{ $item['desc'] }}</p>
                                <button id="open" class="btn border border-radious bg-success"><a
                                        href="{{route('properities.show',['properity'=>$item]) }}">More Info</a>
                                </button>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div id="contact">
            <div class="container">
                <div class="col-md-8">
                    <div class="row">
                        <div class="section-title">
                            <h2>Get In Touch</h2>
                            <p>Please fill out the form below to send us an email and we will get back to you as soon as
                                possible.</p>
                        </div>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name" class="form-control" placeholder="Name"
                                            required="required">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" class="form-control" placeholder="Email"
                                            required="required">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
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
