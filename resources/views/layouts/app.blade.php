<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Idea | Blog') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <a class="nav-link" href="/user/index">Posts</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="active nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li><a class="nav-link" href="{{route('users.show', Auth::user())}}">{{ Auth::user()->name }}</a></li>
                            <li>
                                <div>
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
            </div>
        </nav>

        <main class="text-center">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session()->get('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                        @auth
                            @if (auth()->user()->isAdmin())
                                <div class="col-md-3">
                                    <ul class="list-group my-5">
                                        <li class="list-group-item p-0"><a class="homebtn btn btn-block" href="{{route('categories.index')}}">Categories</a></li>
                                        <li class="list-group-item p-0"><a class="homebtn btn btn-block" href="{{route('posts.index')}}">Posts</a></li>
                                        <li class="list-group-item p-0"><a class="homebtn btn btn-block" href="{{route('users.index')}}">Users</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-9">
                                    @yield('content')
                                </div>
                            @else
                                <div class="col-md-12 p-0">
                                    @yield('content')
                                </div>
                            @endif
                        @else
                            <div class="col-md-12 p-0">
                                @yield('content')
                            </div>
                        @endauth
                </div>
            <footer class="mastfoot text-center my-5">
                <div class="inner my-5">
                  <p>Made by <a href="#" class="text-secondary">Abdouni Yahia</a>, copyright &copy; 2020.</p>
                </div>
            </footer>
        </main>
    </div>
</body>
</html>
