<template>
  <div>
    <!-- ======= About Section ======= -->
    <section class="home-main align-items-center">
        <div class="row mx-auto position-relative">
          <div class="col-lg-12">
            <img src="img/astro_bg_home.png" class="img-fluid"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="5000"
            data-aos-offset="0" 
            >
          </div>
          <div class="col-lg-12 d-flex justify-content-center position-absolute" 
          data-aos="zoom-out" data-aos-duration="3000">
            <img src="img/astro_rocket_home.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-12 text-center position-absolute">
            <h1>Bienvenido a un Universo <br />de Alto Valor</h1>
            <h4 class="py-4">La comunidad que conecta Startups, Profesionales e Inversión</h4>
            <div class="container">
              <search-component></search-component>
            </div>        
          </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= section buttons ======= -->
    <section class="frame-blue">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 text-center p-4"  data-aos="zoom-out" data-aos-duration="1000">
            <a :href="this.startupRoute" class="btn btn-outline-primary btn-lg btn-full">STARTUP O PROYECTOS</a>
          </div>
          <div class="col-sm-4 text-center p-4"  data-aos="zoom-out" data-aos-duration="1000">
            <a :href="this.professionalRoute" class="btn btn-outline-primary btn-lg btn-full">PROFESIONALES</a>
          </div>
          <div class="col-sm-4 text-center p-4"  data-aos="zoom-out" data-aos-duration="1000">
            <a :href="this.investorRoute" class="btn btn-outline-primary btn-lg btn-full">INVERSOR</a>
          </div>
        </div>
      </div>
      
    </section>
    <!-- End section buttons -->

    <!-- ======= Features Section ======= -->
    <section class="home-message bg-moon-planet  pb-5">

      <div class="container">
        <div class="row">
          <!-- <div class="col-12">
            <img src="img/backgrounds/home_feat.png" class="img-fluid">
          </div> -->
          <div class="col-12">
            <div class="mt-5 mx-5">
              <div class="d-lines"></div>
              <div class="text-center" data-aos="fade-zoom-in">
                <h2>¡Somos la Comunidad Startup!</h2>
                <h4>Formada por emprendedores, profesionales e inversores, que buscan cambiar el mundo.</h4>
                <h4>Nuestra misión consiste en aportar las herramientas y recursos para que puedas desarrollar <br/>proyectos únicos que te permitan alcanzar nuevos universos. </h4>
              </div>
              <div class="d-lines"></div>
              <div class="text-center" data-aos="fade-zoom-in">
                <h2>¡Prepárate para despegar!</h2>
                <h4>Conoce los beneficios dentro de StartUp Community</h4>
              </div>
            </div>
            
            <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-duration="1000">
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="home-f-icon text-center">
                  <img src="img/home/col_1.png" alt="">
                </div>
                <div class="home-f-text">
                  <h6>El BigBang</h6>
                  <p>Los inicios son difíciles y a veces explosivos, siempre es bueno tener apoyo. </p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="home-f-icon text-center">
                  <img src="img/home/col_2.png" alt="">
                </div>
                <div class="home-f-text">
                  <h6>Muestra tu estrella</h6>
                  <p>Da visibilidad a tu proyecto o StartUp para su proyección y difusión.</p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="home-f-icon text-center">
                  <img src="img/home/col_3.png" alt="">
                </div>
                <div class="home-f-text">
                  <h6>Conoce otras civilizaciones</h6>
                  <p>Más emprendedores, profesionales expertos e inversores quieren conocerte.</p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="home-f-icon text-center">
                  <img src="img/home/col_4.png" alt="">
                </div>
                <div class="home-f-text">
                  <h6>Explora nuevos universos</h6>
                  <p>Conoce proyectos que te puedan guiar, permitan participar o aportar valor.</p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="home-f-icon text-center">
                  <img src="img/home/col_5.png" alt="">
                </div>
                <div class="home-f-text">
                  <h6>Cuestión de Fe y Ciencia</h6>
                  <p>Creemos en el poder de la innovación, investigación, desarrollo y compartir la experiencia. </p>
                </div>
              </div>
              <div class="col-lg-2 col-sm-4 col-xs-6">
                <div class="home-f-icon text-center">
                  <img src="img/home/col_6.png" alt="">
                </div>
                <div class="home-f-text">
                  <h6>Hipervelocidad</h6>
                  <p>Acelera y traza la ruta de tu StartUp con servicios premium a medida.</p>
                </div>
              </div>
            </div>

          </div>

          </div>
        </div>
      </div>

      <div class="container pt-5 align-center">
        <div class="row">
          <!-- <div class="col-12 px-0">
            <img src="img/backgrounds/home_moon.png" class="img-fluid">
          </div> -->
          <div class="col-12">
            <div class="row py-3 ">
              <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                <a :href="this.startupRoute" class="btn btn-outline-primary mb-2" style="width:200px">Startup</a>
              </div>
              <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                <a :href="this.professionalRoute" class="btn btn-outline-primary mb-2" style="width:200px">Profesional</a>
              </div>
              <div class="col-lg-4 col-sm-12 d-flex justify-content-center">
                <a :href="this.investorRoute" class="btn btn-outline-primary mb-2" style="width:200px">Inversor</a>
              </div>
            </div>
          </div>

          <!-- <div class="container-fluid d-flex position-absolute">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h3>¿Estas preparado para <br/>el despegue?</h3>
                  <button class="btn btn-primary btn-lg btn-block">Crear Cuenta</button>
                </div>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </section>

    <!-- End Features Section -->
  </div>
</template>

<script>
export default {
    setup () {
        

        return {}
    },
    data () {
      return {
        startupRoute: "startups",
        investorRoute: "investor",
        professionalRoute: "professional"
      }
    }
 }
</script>

<style lang="scss" scoped>

</style>