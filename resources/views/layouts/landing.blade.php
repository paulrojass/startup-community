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
  <div class="Cabezal_PrincipalDefault">
    <nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container px-lg-5">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="background-image:url(img/general/menu.png)"></span>
        </button>
        <a class="navbar-brand mx-auto " href="/" >
          <img src="/img/logos/phone.png" class="d-block d-md-none">
          <img src="/img/logos/color.png" class="d-none d-md-block">
        </a>
        <a href="/" class="d-block d-md-none dark-text">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
          </svg>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-3">
            {{-- 
            <li class="nav-item">
            @if (\Route::current()->getName() != 'landings')
              <a class="nav-link active" aria-current="page" href="/">
                <i class="bi bi-arrow-left me-2"></i>
                Volver a home
              </a>
            @endif
            </li>
            --}}
            <li>
              <a class="nav-link text-center" aria-current="page" href="startup">
                Startups
              </a>
            </li>
            <li>
              <a class="nav-link text-center" aria-current="page" href="professional">
                Profesionales
              </a>
            </li>
            <li>
              <a class="nav-link text-center" aria-current="page" href="investor">
                Inversores
              </a>
            </li>
            </li>
          </ul>
          <div class="text-center">
            <a class="btn btn-primary btn-lg" href="pre-register"
            >
            @if (\Route::current()->getName() == 'landings' || \Route::current()->getName() == 'landings.startup')
            ¡QUIERO UNIRME!
            @elseif (\Route::current()->getName() == 'landings.investor')
            ¡QUIERO INVERTIR!
            @else
            ¡QUIERO TRABAJAR!
            @endif
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="">
    @yield('content')
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top py-auto">
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
  @yield('modals')
</body>

<!-- Vertically centered modal -->
</html>