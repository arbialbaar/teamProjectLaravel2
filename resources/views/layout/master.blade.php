<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=MuseoModerno:wght@700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container"  class="navdrone">
    <nav class="navbar navbar-expand-lg navbar-light py-4">
        <a class="navbar-brand @yield('menuHome')" href="/" id="hai1"><b>Drone-class.org</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link @yield('menuHome')" href="/home" id="hai">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('menuDaftar')" href="/join" id="hai">Join Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('menuAbout')" href="/about" id="hai">About</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    @yield('content')

    <footer class="bg-secondary py-5 text-light mt-3 text-center" id="foot">
        <div class="container">
            drone-class.org 2020
        </div>
    </footer>

<script src={{ asset('/js/jquery-3.5.1.min.js') }}></script>    
<script src={{ asset('/js/bootstrap.min.js') }}></script>
<script src={{ asset('/js/script.js') }}></script>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
</body>
</html>