<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Startup Community</title> 

  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Scripts -->
  <!-- Landing CSS Files -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <!-- <link href="landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="landing/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
  <!-- <link href="landing/css/style.css" rel="stylesheet"> -->
</head>

<body class="HomeGeneral01" id="app">
  <div class="pt-4">
    @yield('content')
  </div>
  <div class="modal" id="success-subscribe" tabindex="-1" aria-labelledby="success-subscribe-Label" aria-hidden="true"
    ref="modal-success-susbcribe"
    >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <img src="img/general/success-subscribe.png" alt="">
                    </div>
                    <h3>Ya formas parte de nuestra comunidad</h3>
                    <h2>¡Bienvenido!</h2>
                    <a href="/" class="btn btn-secondary btn-block">
                        VOLVER AL HOME
                    </a>
                </div>
            </div>
        </div>
    </div>



</body>

<!-- Vertically centered modal -->
</html>