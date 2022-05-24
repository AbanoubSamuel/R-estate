@extends('template')
@section('nav')
@endsection
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <section class="webdesigntuts-workshop">
                            <form action="" method="">
                                <input type="search" placeholder="Find your place   !"
                                    style="font-size: medium ; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ; font-weight :bold">
                                <button>Search</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
</header>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6"> <img
                    src="../img/In the Footsteps of Agatha Christie_ A Visit to the Old Cataract Hotel, Aswan, Egypt.png"
                    class="img-responsive" alt=""> </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <h2>Who We Are</h2>
                    <p> REstate is a Platform that represent a mediator those who look for rooms for renting or
                        apartments for sale</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section -->
<div id="services">
    <div class="container">
        <div class="section-title">
            <h2>Our Work</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-media"> <img src="./img/images.jpg" alt=" "> </div>
                <div class="service-desc">
                    <h3>Buy a Home</h3>
                    <p>Find your place with an immersive photo <br>eperience and the most Listings , including <br>
                        things you won't find anywhere else</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-media"> <img src="img/services/service-2.jpg" alt=" "> </div>
                <div class="service-desc">
                    <h3>Sell a home</h3>
                    <p>No matter what path you take to sell your <br> home ,we can help you navigate a successful <br>
                        sale .</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-media"> <img src="img/services/service-3.jpg" alt=" "> </div>
                <div class="service-desc">
                    <h3>Rent a home </h3>
                    <p>We are creating a seamless online experience <br> from shopping on the largest rental <br>
                        network ,to applying ,to paying rent.</p>
                </div>
            </div>
        </div>
        {{-- <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-4.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Kitchen Remodels</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-5.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Windows & Doors</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-6.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Decks & Porches</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section --> --}}
        <div id="portfolio">
            <div class="container">
                <div class="section-title">
                    <h2>Our Service</h2>
                </div>
                <div class="row">
                    <div class="portfolio-items">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Save the trouble of searching for housing</h4>
                                        </div>
                                        <img src="../img/c7996d39-eb97-4bc1-88ad-772f16abafdc.jpg "
                                            class="img-responsive" alt="">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Cheap house </h4>
                                        </div>
                                        <img src="../img/88803b54c3a6646098dd88f395de07f5.jpg " class="img-responsive"
                                            alt="Project Title">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>High quality </h4>
                                        </div>
                                        <img src="../img/9999969fb3fd077ba610812052a8de2fb49.jpg "
                                            class="img-responsive" alt="Project Title">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>No borkerage</h4>
                                        </div>
                                        <img src="../img/777777oto-840497622-612x612.jpg" class="img-responsive"
                                            alt="Project Title">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Safty </h4>
                                        </div>
                                        <img src="../img/istockphoto-638620778-2048x2048.jpg " class="img-responsive"
                                            alt="Project Title">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Contact Client With Seller</h4>
                                        </div>
                                        <img src="../img/Chase Freedom Unlimited vs_ Capital One Quicksilver_ Which Cashback Card is Right for You_.jpg "
                                            class="img-responsive" alt="Project Title">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Trusted</h4>
                                        </div>
                                        <img src="../img/portfolio/07-small.jpg " class="img-responsive"
                                            alt="Project Title">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Direct contact</h4>
                                        </div>
                                        <img src="../img/3444444444444444433c04518bed3c6eb41b3b48a10.jpg"
                                            class="img-responsive" alt="Project Title">
                                    </a> </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="portfolio-item">
                                <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title"
                                        data-lightbox-gallery="gallery1">
                                        <div class="hover-text">
                                            <h4>Flexability</h4>
                                        </div>
                                        <img src="../img/portfolio/09-small.jpg " class="img-responsive"
                                            alt="Project Title">
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Section -->
        <div id="testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>Most Popular Hotels in Aswan</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial">
                            <div class="testimonial-image"> <img src="../img/old.jpg " alt=""> </div>
                            <div class="testimonial-content">
                                <p>Sofitel Legend Old Cataract </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <div class="testimonial-image"> <img src="../img/f23dd6140b4d831195d90e1de0669fec.jpg "
                                    alt=""> </div>
                            <div class="testimonial-content">
                                <p>Movenpick </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <div class="testimonial-image"> <img
                                    src="https://lh5.googleusercontent.com/proxy/AbiW4ZzugE5JiE_y1UR5aDiULd7VLu8U1Iux6G3JZf4HB_TnrciA8S3V594LSm5hcKok9ovHveIRNuMDNDp9tWW7b-mAITeIYC350bA6Sv_SiiTbaMa3n9SnnCy_-kY-wyFHv7NZ38NJ0fkvAK91HbX4_kFhKQ=w253-h168-k-no " " alt=""> </div>
          <div class=" testimonial-content">
                                <p>Tolip</p>
                            </div>
                        </div>
                    </div>
                    <div class="row"> </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <div class="testimonial-image"> <img
                                    src="https://t-cf.bstatic.com/xdata/images/hotel/max1024x768/16763437.jpg?k=3769e5141baba0a34517ae44ff14888b824b3c3bfff25e9771ab01abc5a99d1a&o=&hp=1"
                                    alt=""> </div>
                            <div class="testimonial-content">
                                <p>Pyramisa Island Hotel</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <div class="testimonial-image"> <img src="../img/bb.jpg" alt=""> </div>
                            <div class="testimonial-content">
                                <p>aswan Plaza</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <div class="testimonial-image"> <img src="../img/fgfgg4.jpg" alt=""> </div>
                            <div class="testimonial-content">
                                <p>Cleopatra Hotel </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section -->
        <div id="contact" style="background-color:#1f386e(36, 17, 236)">
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
    </div>
</div>
</div>
