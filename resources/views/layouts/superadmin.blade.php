<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('superadmin')}}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('superadmin')}}/vendors/iconfonts/ionicons/css/ionicons.css">
    <link rel="stylesheet" href="{{asset('superadmin')}}/vendors/iconfonts/typicons/src/font/typicons.css">
    <link rel="stylesheet" href="{{asset('superadmin')}}/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('superadmin')}}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('superadmin')}}/vendors/css/vendor.bundle.addons.css">
  
    <link rel="stylesheet" href="{{asset('superadmin')}}/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('superadmin')}}/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('superadmin')}}/images/favicon.png" />
    @yield('style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="/superadmin/index">
            <img src="{{asset('superadmin')}}/images/logo.svg" alt="/superadmin/logo" /> </a>
          <a class="navbar-brand brand-logo-mini" href="/superadmin/index">
            <img src="{{asset('superadmin')}}/images/logo-mini.svg" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item dropdown language-dropdown">
              <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-0 mr-md-3">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>
                </div>
                <span class="profile-text font-weight-medium d-none d-md-block">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <div class="flag-icon-holder">
                    <i class="flag-icon flag-icon-us"></i>
                  </div>English
                </a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                    <p class="font-weight-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-settings m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                    <p class="font-weight-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('images')}}/{{$user->img}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('images')}}/{{$user->img}}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">{{$user->username}}</p>
                  <p class="font-weight-light text-muted mb-0">{{$user->email}}</p>
                </div>
                <a class="dropdown-item" href="/superadmin/pages/profile">My Profile <span class="badge badge-pill badge-danger"></span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item" href="{{route('logout')}}">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                {{-- <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                  @csrf
                </form> --}}
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{asset('images')}}/{{$user->img}}"  alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{$user->username}}</p>
                  <p class="designation">Superadmin</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <a class="nav-link" href="/superadmin/pages/userlist">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/superadmin/pages/advertisement">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Advertisement Post</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/superadmin/pages/b2bagentlist">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">B2B Agent List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/superadmin/pages/hotelagentlist">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Hotel Agent List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/superadmin/pages/flightagentlist">
                <i class="menu-icon typcn typcn-th-large-outline"></i>
                <span class="menu-title">Flight Agent List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/superadmin/pages/notice">
                <i class="menu-icon typcn typcn-bell"></i>
                <span class="menu-title">Post Notice</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/superadmin/pages/mail">
                <i class="menu-icon typcn typcn-user-outline"></i>
                <span class="menu-title">Send Email</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon typcn typcn-document-add"></i>
                <span class="menu-title">User Registration Page</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="/superadmin/pages/signup"> Register </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        @yield('content')
          <!-- partial:partials/_footer.html -->
      @yield('footer')
      </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('superadmin')}}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{asset('superadmin')}}/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('superadmin')}}/js/shared/off-canvas.js"></script>
    <script src="{{asset('superadmin')}}/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('superadmin')}}/js/demo_1/dashboard.js"></script>
    <!-- End custom js for this page-->
    @yield('script')
  </body>
</html>