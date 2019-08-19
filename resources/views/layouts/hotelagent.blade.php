<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('hotelagent')}}/css/style.css">
    @yield('style')
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Deluxe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="/hotelagent/index" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/hotelagent/room" class="nav-link">Rooms</a></li>
            <li class="nav-item"><a href="/hotelagent/gallery" class="nav-link">Gallery</a></li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">name</p>
                  <p class="font-weight-light text-muted mb-0">email</p>
                </div>
                <a class="dropdown-item" href="">My Profile <span class="badge badge-pill badge-danger"></span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="{{route('logout')}}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                {{-- <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                  @csrf
                </form> --}}
              </div>
            </li>          
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    @yield('content')
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('hotelagent')}}/js/jquery.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/popper.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('hotelagent')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/jquery.stellar.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/aos.js"></script>
  <script src="{{asset('hotelagent')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/bootstrap-datepicker.js"></script>
  <script src="{{asset('hotelagent')}}/js/jquery.timepicker.min.js"></script>
  <script src="{{asset('hotelagent')}}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('hotelagent')}}/js/google-map.js"></script>
  <script src="{{asset('hotelagent')}}/js/main.js"></script>
    
  </body>
</html>