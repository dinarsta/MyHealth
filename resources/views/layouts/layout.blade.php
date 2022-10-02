<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Myhealth</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/vendors/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">

      <!-- sidebar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="/" style="text-decoration: none; color: #fff;"><img src="{{asset('attribute/myhealth.png')}}" alt="logo" style="height: 5rem; width: 5rem; "/>Myhealth</a>
          <a class="sidebar-brand brand-logo-mini" href="/"><img src="{{asset('attribute/myhealth.png')}}" alt="logo" style="height: 3rem; width: 5rem; "/></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">

            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  @if (auth()->user()->foto == 'test.jpg')
                  <a href="{{Route('user')}}"><img class="img-xs rounded-circle " src="https://pbs.twimg.com/media/Eo6vnl5U0AATo4J?format=jpg&name=small" alt=""></a>
                  @else
                  <a href="{{Route('user')}}"><img class="img-xs rounded-circle " src="foto/{{ Auth::user()->foto }}" alt=""></a>
                  @endif
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <a href="{{Route('user')}}"><h5 class="mb-0 font-weight-normal" style="text-decoration: none; color: #fff;">{{ Auth::user()->name }}</h5></a>
                  @if(auth()->user()->role == 'admin')
                    <h6 class="text-muted">Admin</h6>
                  @endif
                </div>
              </div>
            </div>

          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('home')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          @if(auth()->user()->role == 'admin')
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('tableuser')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Data User</span>
            </a>
          </li> 
          @endif

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('catper')}}">
              <span class="menu-icon">
                <i class="mdi mdi-airplane"></i>
              </span>
              <span class="menu-title">History Perjalanan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('catper.new')}}">
              <span class="menu-icon">
                <i class="mdi mdi-grease-pencil"></i>
              </span>
              <span class="menu-title">Mulai Perjalanan</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('logout') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">
                Logout
              </span>
            </a>
          </li>
        </ul>
      </nav>

      <!-- yield content, footer, burger button -->
      <div class="container-fluid page-body-wrapper">

        <!-- burger button -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
          </div>
        </nav>


        <!-- content n footer -->
        <div class="main-panel">

          <!-- content-wrapper -->
          <div class="content-wrapper">
              @yield('content')
          </div>
          <!-- content wrapper end -->

          <!-- footer -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Myhealth 2022</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Made with 💕 by US</span>
            </div>
          </footer>
          <!-- footer end -->

        </div>
        <!-- content n footer end -->

        
      </div>

    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>