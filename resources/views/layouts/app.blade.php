<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Tona Design')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100|Open+Sans+Condensed:300|Oswald:200|Wire+One" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="../css/app.css" rel="stylesheet"> --}}
    <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <header class="header">
        <nav class="nav">
          <!-- Left Side Of Navbar -->
          <ul class="user">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="profile">profile</a>
                    </div>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
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
          <!--Title H1 -->
            <a href="/"><h1>tona interior design</h1></a>
          <!-- Right Side Of Navbar -->
          <ul class="menu">
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   <span class="fa fa-bars"></span>
              </a>
              {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="nosotros">nosotros</a>
              </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="portfolio">portfolio</a>
              </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="cotizaciones">cotizaciones</a>
              </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="faq">FAQ</a>
              </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="contacto">contacto</a>
              </div> --}}
            </li>
          </ul>
        </nav>
    </header>
    <main>
      @yield('content')
    </main>
    <footer class="footer">
      <nav class="social">
        <ul>
          <li><a href="#"><span class="fa fa-facebook"></span></a></li>
          <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
          <li><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
      </nav>
      <nav class="contact">
        <ul>
          <li><a href="nosotros">nosotros</a></li>
          <li><a href="portfolio">portfolio</a></li>
          <li><a href="cotizaciones">cotizaciones</a></li>
          <li><a href="faq">FAQ's</a></li>
          <li><a href="contacto">contacto</a></li>
          <li><a href="register">registrate</a></li>
        </ul>
      </nav>
    </footer>
</body>
</html>
