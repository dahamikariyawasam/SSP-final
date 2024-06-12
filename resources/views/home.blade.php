<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>HIDA Construction</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> hidacons@gmail.com</li>
            <li><i class="fa fa-map"></i> 122/26, Bellanthara Road, Attidiya.</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>HIDA.Construction</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                      <li><a href="{{ url('properties') }}">Properties</a></li>
                      <li><a href="{{ url('contact') }}">Contact Us</a></li>
                      
                      <li> @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a style="colour:" href="{{ url('/dd') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 
                        focus:rounded-sm focus:outline-red-500"><p>Hi, {{Auth::user()->name}}</p></a>
                    @else
                        <!-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a> -->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
                        @endif
                    @endauth
                </div>
            @endif</li>

                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">SriLanka <em>Colombo</em></span>
          <h2>Hurry!<br>Get Your Dream House</h2>
        </div>
      </div>
      
      <div class="item item-2">
        <div class="header-text">
          <span class="category">SriLanka <em>Colombo</em></span>
          <h2>Welcome To Your Dream Home!</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/images/nadimala.jpg" alt="">
            <a href="property-details.html"><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
          </div>
        </div>

        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Featured</h6>
            <h2>Step inside the most sought-after property </h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h4>House For Sale 🏡 Dehiwala, Nadimala</h4>
             </div>
             <div class="accordion-item">
    <p>
        <font color="black">
            4 Story - Completed House (9.7p) <br>
            🔹Bed Rooms - 4<br>
            🔹Bath Rooms - 5<br>
            🔹Servant & Driver Room<br>
            🔸Large Living & Dinning<br>
            🔸Pantry & Kitchen<br>
            🔸T/V Room & Bar<br>
            ▪️Elevator for all floors<br>
            ▪️Basement Parking  - 4 Vehicles<br>
        </font>
    </p>
</div>

            
            
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>250 m2<br><span>Total Square Feets</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                <h4>Contract<br><span>Contract Ready</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                <h4>Payment<br><span>Payment Process</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>24/7 Under Control</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>Get Closer View & Different Feeling</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="assets/images/mayura1.jpg" alt="">
            <a href="https://youtu.be/6Dqn4BQ7Hfw" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="78" data-speed="1000"></h2>
                   <p class="count-text ">Buildings<br>Finished Now</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="21" data-speed="1000"></h2>
                  <p class="count-text ">Years<br>Experience</p>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 



  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Properties For Sale</h6>
            <h2>We Provide The Best Property You Like</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/nadimala2.jpg" alt=""></a>
            <span class="category">Luxury House</span>
            <h6>Rs. 66,000,000</h6>
            <h4><a href="property-details.html">Nadimala, Dehiwala.</a></h4>
            <h4> 122/31 , Nadiamala, Dehiwala. </h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>5</span></li>
              <li>Area: <span>545m2</span></li>
              <li>Floor: <span>4</span></li>
              <li>Parking: <span>4 spots</span></li>
            </ul>
            <div class="main-button">
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/mayura2.jpg" alt=""></a>
            <span class="category">Luxury House</span>
            <h6>Rs.50,000,000</h6>
            <h4><a href="property-details.html">Dehiwala</a></h4>
            <h4> 3/12 , Dehiwala. </h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>450m2</span></li>
              <li>Floor: <span>4</span></li>
              <li>Parking: <span>6 spots</span></li>
            </ul>
            <div class="main-button">
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/hiran.jpeg" alt=""></a>
            <span class="category">Luxury House</span>
            <h6>Rs.40,000,000</h6>
            <h4><a href="property-details.html">Attidiya</a></h4>
            <h4> 122/26, Attidiya. </h4>
            <ul>
              <li>Bedrooms: <span>5</span></li>
              <li>Bathrooms: <span>6</span></li>
              <li>Area: <span>225m2</span></li>
              <li>Floor: <span>4</span></li>
              <li>Parking: <span>4 spots</span></li>
            </ul>
            <div class="main-button">
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
            </div>
          </div>
        </div>      
        
      </div>
    </div>
  </div>



  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Properties For Rent</h6>
            <h2>Discover Your Ideal Rental Property With Us </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/parana.jpeg" alt=""></a>
            <span class="category">House</span>
            <h6>Rs.70,000 (Per Month)</h6>
            <h4><a href="property-details.html">Attidiya</a></h4>
            <h4> 7,Main Road, Attidiya.  </h4>
            <ul>
              <li>Bedrooms: <span>3</span></li>
              <li>Bathrooms: <span>3</span></li>
              <li>Area: <span>545m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>1 spots</span></li>
            </ul>
            <div class="main-button">
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/babi.jpeg" alt=""></a>
            <span class="category">House</span>
            <h6>Rs.100,000 (Per Month)</h6>
            <h4><a href="property-details.html">Bellanwila</a></h4>
            <h4> 25A, Bellanwila. </h4>
            <ul>
              <li>Bedrooms: <span>5</span></li>
              <li>Bathrooms: <span>5</span></li>
              <li>Area: <span>450m2</span></li>
              <li>Floor: <span>4</span></li>
              <li>Parking: <span>3 spots</span></li>
            </ul>
            <div class="main-button">
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-03.jpg" alt=""></a>
            <span class="category">Mini Appartment</span>
            <h6>Rs.60,000</h6>
            <h4><a href="property-details.html">Dehiwala</a></h4>
            <h4> 03,Main Road, Dehiwala. </h4>
            <ul>
              <li>Bedrooms: <span>5</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>225m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class="main-button">
            <li><a href="{{ url('contact') }}">Contact Us</a></li>
            </div>
          </div>
        </div>      
        
      </div>
    </div>
  </div>

  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Contact Us</h6>
            <h2>Get In Touch With Our Agents</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>071 440 6902<br><span>Phone Number</span></h6>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="item email">
                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>hidacons@gmail.com<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
          
        </div>
             
      </div>

      </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © HIDA Construction.
        
         </p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>