<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <!-- Custom -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/lightbox.min.css') }}">

  <title>BT Real Estate</title>
</head>

<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="assets/img/logo.png" class="logo" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
          <li class="nav-item active mr-3">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="/listings">Featured Listings</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          @auth
          <li class="nav-item mr-3">
            <a class="nav-link" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item mr-3">
            <form class="inline" method="POST" action="/logout">
              @csrf
              <button style="background: none!important;
              border: none;
              padding: 0!important;
              cursor: pointer;" type="submit">
                 <a class="nav-item nav-link">LOGOUT</a>
              </button>
            </form>
          </li>
          @else
          <li class="nav-item mr-3">
            <a class="nav-link" href="/register">
              <i class="fas fa-user-plus"></i> Register</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link" href="/login">
              <i class="fas fa-sign-in-alt"></i> Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  

  {{$slot}}

  <!-- Footer -->
  <footer id="main-footer" class="py-4 bg-primary text-white text-center">
    Copyright &copy;
    <span class="year"></span> Real Estate
  </footer>

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/lightbox.min.js') }}"></script>
  <script src="https://kit.fontawesome.com/4c5fbf2350.js" crossorigin="anonymous"></script>
</body>

</html>