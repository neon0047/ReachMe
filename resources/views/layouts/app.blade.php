<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ReachMe</title>
    <link rel="icon" href="/svg/logo.svg" type="image/icon type">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body  style = "
  background-color: #181919; /* For browsers that do not support gradients */
  background-image: linear-gradient(#181919, grey); /* Standard syntax (must be last) */">
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container" >
                <a class="navbar-brand d-flex" href="{{ url('/home') }}">
                    <div><img src="/svg/logo.svg" style="height: 30px; border-right:1px solid cadetblue" class="pr-3"></div>
                    <div class="pt-1 pl-3" style="color: cadetblue"><strong>ReachMe</strong></div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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

        <main class="py-4">
            @yield('content')
        </main>

    </div>

</body>
<div>
    <footer class="si"  style=" padding: 20px 0px 0 540px ;
                         background: #d6d6d6;
                         font-family: Lucida Sans Unicode;
                         color:#444444;
                         font-size:10px;
                         ">
        <a style ="color:#444444;  "  href="https://github.com/neon0047/ReachMe"> GITHUB</a>
        <a style ="color:#444444; padding-left: 20px "  href="https://laravel.com/"> LARAVEL</a>
        <a style ="color:#444444; padding-left: 20px "  href="https://www.instagram.com/brainiaaac/"> BRAINIAAAC</a>
        <BR>
            &copy; 2020 ReachMe <span style=" font-size:18px">|</span> Design by Nagendra
        </BR>

    </footer>
</div>
</html>
