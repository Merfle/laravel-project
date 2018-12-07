<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Tona Design')</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/functions.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100|Open+Sans+Condensed:300|Oswald:200|Wire+One|Montserrat" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="../css/styles.css" rel="stylesheet"> --}}
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">

</head>
<body>
  <div class="container">
    <div class="header">
      <h1><a href="/">tona interior design</a></h1>
    </div>
    <div class="sidebar">
      <ul>
        <!-- Authentication Links -->
        @guest
            <li>
              <div class="log-in">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </div>
            </li>
            <li>
              <div class="register">
                @if (Route::has('register'))
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
              </div>
            </li>
        @else
            <li>
              <div class="username">
                <a class="nav-link" href="profile" role="button">{{ Auth::user()->name }}</a>
              </div>
              <div class="log-out">
                <a class="nav-link" href="{{ route('logout') }}"
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
        <li><a href="nosotros">nosotros</a></li>
        <li><a href="portfolio">portfolio</a></li>
        <li><a href="cotizaciones">cotizaciones</a></li>
        <li><a href="faq">FAQ</a></li>
        <li><a href="contacto">contacto</a></li>
      </ul>
    </div>
    @yield('content')
    <div class="footer">
      <ul class="social">
        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
        <li><a href="#"><span class="fa fa-instagram"></span></a></li>
      </ul>
      <ul class="contact">
        <li><a href="nosotros">nosotros</a></li>
        <li><a href="portfolio">portfolio</a></li>
        <li><a href="cotizaciones">cotizaciones</a></li>
        <li><a href="faq">FAQ's</a></li>
        <li><a href="contacto">contacto</a></li>
        <li><a href="register">registrate</a></li>
      </ul>
    </div>
  </div>
