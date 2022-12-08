@extends('layouts.landing')

@section('content')
<div>
    <!-- ======= About Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="row d-flex position-relative mx-auto">
          <div class="col-lg-12 d-flex align-items-center" data-aos="fade-out" data-aos-delay="200">
            <img src="img/astro_bg_home.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-12 d-flex align-items-center position-absolute" data-aos="zoom-out" data-aos-delay="400">
            <img src="img/astro_rocket_home.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-12 text-center position-absolute">
            <h1>Bienvenido a un Universo <br />de Alto Valor</h1>
            <h3>La comunidad que conecta Startups, Profesionales e Inversión</h3>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 text-center">
            <button type="button" class="btn btn-outline-primary btn-lg ">STARTUP O PROYECTOS</button>
          </div>
          <div class="col-lg-4 text-center">
            <button type="button" class="btn btn-outline-primary btn-lg ">PROFESIONALES</button>
          </div>
          <div class="col-lg-4 text-center">
            <button type="button" class="btn btn-outline-primary btn-lg ">INVERSOR</button>
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="d-lines"></div>
        <div class="text-center" data-aos="fade-up">
          <h2>¡Somos la Comunidad Startup!</h2>
          <h3>Formada por emprendedores, profesionales e inversores, que buscan cambiar el mundo.</h3>
          <h3>Nuestra misión consiste en aportar las herramientas y recursos para que puedas desarrollar proyectos únicos que te permitan alcanzar nuevos universos. </h3>
        </div>
        <div class="d-lines"></div>
        <div class="text-center" data-aos="fade-up">
          <h2>¡Prepárate para despegar!</h2>
          <h3>Conoce los beneficios dentro de StartUp Community</h3>
        </div>
      </div>
    </section>
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container">
        <div class="row pt-5">
          <div class="col-lg-12" data-aos="zoom-in">
            <img src="img/startup.png" alt="">
          </div>
        </div> <!-- / row -->
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" data-aos="fade-up" class="features pb-0" style="background: url('img/background_moon.png') no-repeat center bottom;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 text-center">
            <button class="btn btn-primary">Startup</button>
            <img src="img/astro_startup.png" alt="">
          </div>
          <div class="col-lg-4 text-center">
            <img src="img/astro_professional.png" alt="">
            <h1>
              <button class="btn btn-primary">Profesional</button>
            </h1>
          </div>
          <div class="col-lg-4 text-center">
            <img src="img/astro_investor.png" alt="">
            <button class="btn btn-primary">Inversor</button>
          </div>
        </div>
        <div class="row pb-5">
          <div class="col-lg-12 text-center">
            <h2>¿Estas preparado para el despegue?</h2>
            <button class="btn btn-primary">Crear Cuenta</button>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->


</div>
@endsection
