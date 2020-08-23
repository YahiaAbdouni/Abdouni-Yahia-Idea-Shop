<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>IdeaShop</title>

    <!-- Styles -->
    <link href="{{asset('assets/css/page.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/favicon.png">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="/">
            <img class="logo-dark" src="../assets/img/logo-dark.png" alt="logo">
            <img class="logo-light" src="../assets/img/logo-light.png" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">

            @auth
                @if (auth()->user()->isAdmin())
                  <li class="nav-item">
                    <a class="nav-link active" href="/welcome">Dashboard</a>
                </li>
                @endif
            @endauth

            <li class="nav-item">
              <a class="nav-link active" href="/">Home</a>
            </li>

            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{route('user-show', auth()->id())}}">Profile</a>
            </li>
            @endauth

          </ul>
        </section>

        {{-- <a class="btn btn-xs btn-round btn-success" href="{{ route('login') }}">Login</a> --}}
        {{-- <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="btn btn-xs btn-round btn-success mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @else
              <li>
                  <div>
                      <a class="btn btn-xs btn-round btn-success" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul> --}}

      </div>
    </nav><!-- /.navbar -->
    <!-- Header -->
    <header class="header text-center text-white" style="background-image: linear-gradient(-225deg, rgba(0,0,0,0.9), rgba(0,0,0,0.3)), url(../assets/img/thumb/19.jpg);">
        
      </header><!-- /.header -->
  
  
      <!-- Main Content -->
      <main class="main-content">
        <div class="section bg-gray">
          <div class="container">
            <div class="row">
  
  
              <div class="col-md-12 col-xl-12">
                <div class="row gap-y">
                  @yield('content')
                </div>
              </div>
  
            </div>
          </div>
        </div>
      </main>
      <!-- Footer -->
      <footer class="footer">
          <div class="container">
            <div class="row gap-y align-items-center">
    
              <div class="col-6 col-lg-3">
                <a href="../index.html"><img src="../assets/img/logo-dark.png" alt="logo"></a>
              </div>
    
              <div class="col-6 col-lg-3 text-right order-lg-last">
                <div class="social">
                  <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
                  <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
                  <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
                  <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
                </div>
              </div>
    
              <div class="col-lg-6">
                <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
                  <a class="nav-link" href="../page/about-1.html">About</a>
                  <a class="nav-link" href="../page/contact-1.html">Contact</a>
                </div>
              </div>
    
            </div>
          </div>
        </footer><!-- /.footer -->
    
    
        <!-- Scripts -->
        <script src="../assets/js/page.min.js"></script>
        <script src="../assets/js/script.js"></script>
    
      </body>
    </html>

    


    

