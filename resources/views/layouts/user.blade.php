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
    <style>
      html{
        scroll-behavior: smooth;
      }
    </style>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../../assets/img/favicon.png">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="/">
            <img class="logo-dark" src="../../../assets/img/logo-dark.png" alt="logo">
            <img class="logo-light" src="../../../assets/img/logo-light.png" alt="logo">
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

            <li class="nav-item">
              <a class="nav-link" href="#">Categories <span class="arrow"></span></a>
              <nav class="nav">
                @foreach ($categories as $category)
                  <a class="nav-link" href="{{route('category.show', $category->id)}}">{{$category->name}}</a>
                @endforeach
              </nav>
            </li>

            @auth
            <li class="nav-item">
              <a class="nav-link" href="{{route('user-show', auth()->id())}}">Profile</a>
            </li>
            @endauth

          </ul>
        </section>

        {{-- <a class="btn btn-xs btn-round btn-outlineprimary" href="{{ route('login') }}">Login</a> --}}
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="btn btn-xs btn-round btn-outline-primary mx-1" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @else
              <li>
                  <div>
                      <a class="btn btn-xs btn-round btn-outline-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>

      </div>
    </nav><!-- /.navbar -->

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
          <div class="row gap-y align-items-center">
  
            <div class="col-6 col-lg-3">
              <a href="../index.html"><img src="../../../assets/img/logo-dark.png" alt="logo"></a>
            </div>
  
            <div class="col-6 col-lg-3 text-right order-lg-last">
              <div class="social">
                <a class="social-facebook" href="https://www.facebook.com/yabdouni3"><i class="fa fa-facebook"></i></a>
                <a class="social-twitter" href="https://twitter.com/yabdouni3"><i class="fa fa-twitter"></i></a>
                <a class="social-instagram" href="https://www.instagram.com/abdouni_yahia/"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
  
          </div>
        </div>
      </footer><!-- /.footer -->
  
  
      <!-- Scripts -->
      <script src="../../assets/js/page.min.js"></script>
      <script src="../../assets/js/script.js"></script>
  
    </body>
  </html>