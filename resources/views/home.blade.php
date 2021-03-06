@extends('layout')

@section('content')
     <!-- == Home Section Start == -->
     <section id="home" >
        <!-- silider start -->
        <div class="main-slider-1 white-clr-all">
          <div id="carosel-mr-1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carosel-mr-1" data-slide-to="0" class="active"></li>
              <li data-target="#carosel-mr-1" data-slide-to="1"></li>
              <li data-target="#carosel-mr-1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner main-sld" role="listbox">
              <div class="item active main-sld">
                <!-- change slider image -->
                <div class="slider-bg" style="background-image: url('image/slider/dummy-slider.jpg');"></div>
                <div class="slider-cell">
                  <div class="slider-ver">
                    <div class="slider-con text-center">
                      <h1>Grow Your <span>Business</span></h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum expedita maxime culpa.</p>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="#">View Demo</a>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="#">Find More</a>
                    </div>
                    <!-- end slider content -->
                  </div>
                </div>
              </div>
              <!-- end single item -->
              <div class="item main-sld">
                <!-- change slider image -->
                <div class="slider-bg" style="background-image: url('image/slider/dummy-slider.jpg');"></div>
                <div class="slider-cell">
                  <div class="slider-ver">
                    <div class="slider-con text-center">
                      <h1>Grow Your <span>Businesss</span></h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum expedita maxime culpa.</p>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="#">View Demo</a>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="#">Find More</a>
                    </div>
                    <!-- end slider content -->
                  </div>
                </div>
              </div>
              <!-- end single item -->
              <div class="item main-sld">
                <!-- change slider image -->
                <div class="slider-bg" style="background-image: url('image/slider/dummy-slider.jpg');"></div>
                <div class="slider-cell">
                  <div class="slider-ver">
                    <div class="slider-con text-center">
                      <h1>Increase Product <span>Sales </span></h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum expedita maxime culpa.</p>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="#">View Demo</a>
                      <a class="btn btn-default btn-animate btn-style hvr-shutter-out-vertical" href="#">Find More</a>
                    </div>
                    <!-- end slider content -->
                  </div>
                </div>
              </div>
              <!-- end single item -->
            </div>
            <a class="left slide-control-mr" href="#carosel-mr-1" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
            <a class="right slide-control-mr" href="#carosel-mr-1" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <!-- end slider bar -->
        <!--slider section start-->
    </section>
    <!-- == Home Section End == -->

    <!-- == About Section Start == -->
 <section id="about" class="about section-padding-top">
    <div class="container">
        <div class="section-title">
            <h2>About <span>Us</span></h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>
        <div class="row">
            <!-- About image -->
            <div class="col-md-6">
                <a href="#" class="img-about">
                    <img src="image/about/dummy-image.jpg" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-md-6">
        <!-- About text-->
                <div class="about-details">
                    <h5>WHAT WE ARE</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo tellus pulvinar. Donec sodales tortor vitae leo bibendum tincidunt. Suspendisse posuere quam eget porta tempor. Cras tempor bibendum libero, non semper velit bibendum. Integer posuere augue eu feugiat congue.</p>
                    <ul class="image-contact-list">
                        <li><i class="icofont icofont-speech-comments"></i> <span> Reliable and Secure Platform</span></li>
                        <li><i class="icofont icofont-package"></i> <span>Everything is perfectly organized</span></li>
                        <li><i class="icofont icofont-settings"></i> <span>Simple Line Icon</span></li>
                        <li><i class="icofont icofont-gift"></i> <span>Step on the new level</span></li>

                    </ul>
                    <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="#">Read More</a>
                </div>
        <!-- /About text -->
            </div>
        </div>
    </div>
</section>
<!-- == About Section End == -->

 <!-- == Service Section Start == -->
 <section id="service" class="service section-padding-top">
    <div class="container">
        <div class="section-title">
            <h2>Our <span>Services</span></h2>
            <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
        </div>
        <div class="row content service-grid-s1">
            <!-- single serivce-->
            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
             <i class="fa fa-graduation-cap"></i>
          </div>
          <div class="details">
              <h3><a href="#">Financial Planning</a></h3>
              <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>
          </div>
                </div>
            </div>
            <!-- single serivce-->
            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
            <i class="fa fa-credit-card"></i>
          </div>
          <div class="details">
              <h3><a href="#">Business Loan </a></h3>
              <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>
          </div>
                </div>
            </div>
            <!-- single serivce-->
            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
            <i class="fa fa-subway"></i>
          </div>
          <div class="details">
              <h3><a href="#">Retairement Planning</a></h3>
              <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>
          </div>
                </div>
            </div>
            <!-- single serivce-->
            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
            <i class="fa fa-archive"></i>
          </div>
          <div class="details">
              <h3><a href="#">Insurance Consulting </a></h3>
              <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>
          </div>
                </div>
            </div>
            <!-- single serivce-->
            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
             <i class="fa fa-rocket"></i>
          </div>
          <div class="details">
              <h3><a href="#">Taxes Planning</a></h3>
              <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>
          </div>
                </div>
            </div>
            <!-- single serivce-->
            <div class="col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
            <i class="fa fa-universal-access"></i>
          </div>
          <div class="details">
              <h3><a href="#">Mutual funds</a></h3>
              <p> Business Loan Our cross stage cunt be applications intended for iPhone, Blackberry, Android and so on run consist</p>
          </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- == Service Section End == -->

<!-- == Team Section Start == -->
<section id="team" class="section-padding">
  <div class="container">
    <div class="section-title">
      <h2>Our Best <span>Team</span></h2>
      <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
    </div>
    <div class="row">
        <!-- Single team item-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-single text-center m-b-30">
                <div class="team-img">
                    <img src="image/team/dummy-image.jpg" alt="" class="img img-responsive">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                 <div class="team-content">
                    <h3><a href="single-team-page.html">John Doe</a></h3>
                    <span>Founder</span>
                </div>
            </div>
        </div>
        <!-- Single team item-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-single text-center m-b-30">
                <div class="team-img">
                    <img src="image/team/dummy-image.jpg" alt="" class="img img-responsive">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3><a href="single-team-page.html">John Doe</a></h3>
                    <span>CEO</span>
                </div>
            </div>
        </div>
        <!-- Single team item-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-single text-center m-b-30">
                <div class="team-img">
                    <img src="image/team/dummy-image.jpg" alt="" class="img img-responsive">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3><a href="single-team-page.html">John Doe</a></h3>
                    <span>Managing Director</span>
                </div>
            </div>
        </div>
        <!-- Single team item-->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="team-single text-center m-b-30">
                <div class="team-img">
                    <img src="image/team/dummy-image.jpg" alt="" class="img img-responsive">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3><a href="single-team-page.html">John Doe</a></h3>
                    <span>Administrative Officer</span>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- == Team Section End == -->

<!-- == Counter Section Start == -->
<section id="counter" class="counter-bg bg-opacity section-padding-60">
    <div class="container">
        <div class="row">
        <!-- Counter item-->
        <div class="col-md-3 col-sm-6">
            <div class="counter-item style-2">
                <div class="counter-item-inner">
                <i class="fa fa-desktop" aria-hidden="true"></i>
                    <h4>Projects Done</h4>
                    <span class="counter">1000</span>
                </div>
            </div>
        </div>
        <!-- Counter item-->
        <div class="col-md-3 col-sm-6">
            <div class="counter-item style-2">
                <div class="counter-item-inner">
            <div class="icon"></div>
                    <i class="fa fa-smile-o"></i>
                      <h4>Happy Clients</h4>
                      <span class="counter">2000</span>
                </div>
            </div>
        </div>
        <!-- Counter item-->
        <div class="col-md-3 col-sm-6">
            <div class="counter-item style-2">
                <div class="counter-item-inner">
            <div class="icon"></div>
                    <i class="fa fa-users" aria-hidden="true"></i>
                      <h4>Employees</h4>
                      <span class="counter">215</span>
                </div>
            </div>
        </div>
        <!-- Counter item-->
        <div class="col-md-3 col-sm-6">
            <div class="counter-item style-2">
                <div class="counter-item-inner">
            <div class="icon"></div>
                  <i class="fa fa-trophy" aria-hidden="true"></i>
                      <h4>Awards</h4>
                      <span class="counter">3000</span>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- == Counter Section End == -->

<!-- == Pricing Table Section Start == -->
<section id="portfolio-section" class="portfolio section-padding-top">
  <div class="container">
    <div class="section-title">
      <h2>Pricing<span>Table</span></h2>
      <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
    </div>
    <div class="row">
       <div class="col-md-3">
            <div class="pricing-item text-center">
              <div class="pricing-heading">
                <h6 class="title">Basic</h6>
              </div>
              <div class="pricing-body">
                <div class="rate">
                  <h3 class="amount">$15</h3>
                  <h6 class="validity">Month</h6>
                </div>
                  <ul class="pricing-list">
                    <li>Full Access</li>
                    <li>Unlimited Bandwidth</li>
                    <li>30 GB Space</li>
                    <li>1 Month Support</li>
                    <li>20 E-mail Accounts</li>
                    <li>24/7 Support</li>
                  </ul>
                 <a class="button btn btn-default btn-style hvr-shutter-out-vertical " href="#">Order Now</a>

              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-item text-center">
              <div class="pricing-heading">
                <h6 class="title">Professional</h6>
              </div>
              <div class="pricing-body">
                <div class="rate">
                  <h3 class="amount">$25</h3>
                  <h6 class="validity">Month</h6>
                </div>
                  <ul class="pricing-list">
                    <li>Full Access</li>
                    <li>Unlimited Bandwidth</li>
                    <li>50 GB Space</li>
                    <li>1 Month Support</li>
                    <li>20 E-mail Accounts</li>
                    <li>24/7 Support</li>
                  </ul>
                 <a class="button btn btn-default btn-style hvr-shutter-out-vertical " href="#">Order Now</a>

              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-item text-center active-pricing">
              <div class="pricing-heading">
                <h6 class="title">Business</h6>
              </div>
              <div class="pricing-body">
                <div class="rate">
                  <h3 class="amount">$55</h3>
                  <h6 class="validity">Month</h6>
                </div>
                  <ul class="pricing-list">
                    <li>Full Access</li>
                    <li>Unlimited Bandwidth</li>
                    <li>100 GB Space</li>
                    <li>1 Month Support</li>
                    <li>100 E-mail Accounts</li>
                    <li>24/7 Support</li>
                  </ul>
                  <a class="button btn btn-default btn-style hvr-shutter-out-vertical " href="#">Order Now</a>
              </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="pricing-item text-center">
              <div class="pricing-heading">
                <h6 class="title">CORPORATE</h6>
              </div>
              <div class="pricing-body">
                <div class="rate">
                  <h3 class="amount">$100</h3>
                  <h6 class="validity">Month</h6>
                </div>
                  <ul class="pricing-list">
                    <li>Full Access</li>
                    <li>Unlimited Bandwidth</li>
                    <li>100 GB Space</li>
                    <li>1 Month Support</li>
                    <li>100 E-mail Accounts</li>
                    <li>24/7 Support</li>
                  </ul>
                 <a class="button btn btn-default btn-style hvr-shutter-out-vertical " href="#">Order Now</a>
              </div>
            </div>
        </div>
    </div>
  </div>
</section>
<!-- == Pricing Table Section End == -->


<!-- ==== Portfolio section start ==== -->
<section class="section-padding gray-brackground" id="portfolio">
   <div class="container">
           <div class="section-title">
              <h2>Our <span>Project</span></h2>
              <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
          </div>
      <div class="portfolio-content">
         <!-- Protfolio navbar -->
         <div class="portfolio-filter-wrap text-center" >
             <ul class="portfolio-filter hover-style-one">
                 <li class="active"><a href="#" data-filter="*"> All</a></li>
                 <li><a href="#" data-filter=".cat1">WEB Design</a></li>
                 <li><a href="#" data-filter=".cat2">Mobile</a></li>
                 <li><a href="#" data-filter=".cat3">SEO</a></li>
                 <li><a href="#" data-filter=".cat4">Photography</a></li>
                 <li><a href="#" data-filter=".cat5">Development</a></li>
             </ul>
         </div>
         <div class="portfolio portfolio-gutter portfolio-style-2 portfolio-container portfolio-masonry portfolio-column-count-4 ">
             <!-- Single portfolio item -->
             <div class="portfolio-item cat1 cat3">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                         <!-- Change the dummy image -->
                         <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                         <!-- Change the dummy image -->
                         <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
             <!-- Single portfolio item -->
             <div class="portfolio-item cat1 cat2">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                        <!-- Change the dummy image -->
                        <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                         <!-- Change the dummy image -->
                         <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
             <!-- Single portfolio item -->
             <div class="portfolio-item cat3 cat4 cat2 cat1">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                        <!-- Change the dummy image -->
                        <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                         <!-- Change the dummy image -->
                         <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
             <!-- Single portfolio item -->
             <div class="portfolio-item cat1 cat3 cat5">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                         <!-- Change the dummy image -->
                         <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                         <!-- Change the dummy image -->
                         <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
             <!-- Single portfolio item -->
             <div class="portfolio-item cat5 cat2 cat4">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                         <!-- Change the dummy image -->
                         <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                        <!-- Change the dummy image -->
                        <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
             <!-- Single portfolio item -->
             <div class="portfolio-item cat1 cat5 cat3">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                         <!-- Change the dummy image -->
                         <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                         <!-- Change the dummy image -->
                         <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
               <!-- Single portfolio item -->
             <div class="portfolio-item cat1 cat3">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                         <!-- Change the dummy image -->
                         <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                         <!-- Change the dummy image -->
                         <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
             <!-- Single portfolio item -->
             <div class="portfolio-item cat1 cat2">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                        <!-- Change the dummy image -->
                        <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                         <!-- Change the dummy image -->
                         <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
             <!-- Single portfolio item -->
             <div class="portfolio-item cat3 cat4 cat2 cat1">
                 <div class="portfolio-item-content">
                     <div class="item-thumbnail">
                        <!-- Change the dummy image -->
                        <img src="image/portfolio/dummy-image.jpg" alt="">
                     </div>
                     <div class="portfolio-description">
                         <h4><a href="#" >project title</a></h4>

                         <!-- Change the dummy image -->
                         <a href="image/portfolio/dummy-image.jpg" class="portfolio-gallery-set"><i class="fa fa-search-plus"></i></a><a target="_blank" href="#"><i class="fa fa-link"></i></a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="text-center">
            <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="#">View More</a>
         </div>
      </div>
   </div>
</section>
<!-- ==== Protfolio section end ==== -->


@stop
