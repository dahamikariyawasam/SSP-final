<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Villa Agency - Property Listing by TemplateMo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
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
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/')}}">Home</a></li>
                      <li><a href="{{ url('Properties') }}">Properties</a></li>
                      <li><a href="{{ url('contact') }}">Contact Us</a></li>
                      <li> @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a style="colour:" href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 
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

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>



<!-- Search Form -->
<div class="container mt-4">
<form action="{{ url('searchproduct') }}" method="get" class="search-field container">
                                @csrf
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by city" id="Search_products">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Search</button>
            </span>
        </div>
    </form>

</div>


  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Properties For Sale</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Properties For Rent</a>
        </li>
        
      </ul>
      <div class="row properties-box">
        
      
      @foreach($products as $productss)
      <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv">
          <div class="item">
            <a href="property-details.html"><img src="{{ asset('uploads/product/' . $productss->image) }}" alt=""></a>
            <span class="category">{{$productss->MainCity}}</span>
            <h6>{{$productss->price}}</h6>
            <h4><a href="property-details.html">{{$productss->address}}</a></h4>
            <!-- <h4>{{$productss->address}}</h4> -->
            <ul>
            <li>{{$productss->description}}</li>
            </ul>
            <div class="main-button">
              <a href="https://calendly.com/dkariyawasam19/30min">Schedule a visit</a>
            </div>
          </div>
        </div>
        
       @endforeach
        
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>HIDA CONSTRUCTION 
        
        <a rel="nofollow" href="https://templatemo.com" target="_blank"></a></p>
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
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    $(document).ready(function() {
        cartCount();
        $('#Search_products').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ url('product-list') }}",
                    type: 'GET',
                    data: {
                        term: request.term
                    },
                    dataType: 'json',
                    success: function(data) {
                        var resp = $.map(data, function(obj) {
                            return obj.name;
                        });
                        response(resp);
                    }
                });
            },
            minLength: 1
        });
    });


    function cartCount() {
        $.ajax({
            method: 'GET',
            url: "{{ url('cart-count') }}",

            success: function(response) {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
                console.log(response.count);
            }
        });
    }
</script>

  </body>
</html>