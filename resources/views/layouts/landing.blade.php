<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Startup Community') }}</title> 

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

<body class="HomeGeneral01">
  <div class="Cabezal_PrincipalDefault">
    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">
          <img src="/img/logos/color.png" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item text-center">
            @if (\Route::current()->getName() != 'landings')
              <a class="nav-link active" aria-current="page" href="/">
                <i class="bi bi-arrow-left me-2"></i>
                Volver a home
              </a>
            @endif
            </li>
          </ul>
          <div class="text-center">
            @if (\Route::current()->getName() == 'landings.investor')
            <button class="btn btn-primary btn-lg" type="submit">¡QUIERO INVERTIR!</button>
            @endif
            @if (\Route::current()->getName() == 'landings.professional')
            <button class="btn btn-primary btn-lg" type="submit">¡QUIERO TRABAJAR!</button>
            @endif
          </div>
        </div>
      </div>
    </nav>

    
  </div>

  <div id="app">
    @yield('content')
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top pt-3 pb-2">
      <div class="container">
        <div class="row gy-4">
          {{--
          <div class="col-lg-5 col-md-12 footer-info">
            <h4>Starup Company</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Product</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Explore</h4>
            <ul>
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Company</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <img src="img/logo_blanco.png" alt="StartUp">

          </div>
          --}}

          <div class="container">
      <div class="copyright" style="color:white">
        &copy; STARTUP COMMUNITY Todos los derechos reservados.
      </div>
    </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

  <!-- Vendor JS Files -->

  <!-- <script src="landing/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="landing/vendor/aos/aos.js"></script>
  <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="landing/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="landing/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="landing/vendor/php-email-form/validate.js"></script> -->

  <!-- <script src="landing/vendor/search/js/extention/choices.js"></script>
  <script>
    const choices = new Choices('[data-trigger]',
    {
      searchEnabled: false
    });

  </script> -->
  <!-- Template Main JS File-->
  <!-- <script src="landing/js/main.js"></script> -->
</body>

<!-- Vertically centered modal -->
<div class="modal" id="modal-investor" tabindex="-1" aria-labelledby="modal-investor-Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
          
        <form method="post" class="php-email-form">
            <div class="mb-3">
              <h3 class="title">Conecta con Startup Community</h3>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nombres y apellidos</label>
              <input type="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Mensaje</label>
              <textarea class="form-control" name="message" rows="6" required></textarea>
            </div>
            <div class="mb-3 mx-5">
              <button type="submit" class="btn btn-primary btn-block">ENVIAR</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>



</html>