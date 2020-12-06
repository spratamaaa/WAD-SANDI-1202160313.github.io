<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand navbar-light bg-light justify-content-center py-3">
        <ul class="nav navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="/">HOME</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('products.index') }}">PRODUCT</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('order.index') }}">ORDER</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">HISTORY</a>
          </li>
      </ul>
    </nav>
      
      <div class="container">
      @yield('content')
      </div>
    </body>
</html>
