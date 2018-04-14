<!DOCTYPE html>
<html>

<head>
  @include('templates.head')

  <!-- Carousel -->
  <link rel="stylesheet" href="<?= asset('css/dist/slick/slick.css') ?>">
  <link rel="stylesheet" href="<?= asset('css/dist/slick/slick-theme.css') ?>">
</head>

<body>
  <div class="page-wrapper">

    @include('templates.header')

    @include('templates.navbar')

    <section class="page-title text-center parallax" style="background-image: url(<?= asset('images/clinica/fachada.jpg') ?>);">
        <div class="container">
            <div class="title-text">
                <h1>A Clínica</h1>
            </div>
        </div>
    </section>

    <section class="story">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="story-content">

                      <h3 class="tagline"><i>“Similia similibus curentur” - Hipócrates</i></h3>

                      <p>A Clínica <b>SIMILIA</b> é uma referência no atendimento médico homeopático em Curitiba, possuindo em seus quadros profissionais dos mais gabaritados.</p>

                      <p>É um centro de excelência no tratamento aos pacientes, tanto em casos crônicos quanto agudos ou casos de alta complexidade.</p>
                      
                      <p>É também uma escola para a qual concorrem médicos homeopatas de todo o país, oferecendo cursos regulares de aperfeiçoamento e treinamento, com a orientação e colaboração da The Other Song Academy of Advanced Homeopathy, considerada a mais avançada escola de homeopatia do mundo.</p>

                      <p>Localizada na área mais nobre da cidade, dispõe de espaço amplo e confortável e com estacionamento próprio.</p>

                      <p>Consultas exclusivamente com hora marcada, de 1 hora e meia de duração.</p>

                      <p><b>NÃO ACEITAMOS CONVÊNIOS</b></p>

                      <h6>Missão</h6>
                      <h3 class="tagline">Devolver ao paciete sua saúde para que possa galgar os mais altos fins de sua existência.</h3>
                  </div>
              </div>

              <br>

              <div class="hero-slider" style="height: 80vh">
                <div class="slider-item" style="height: 80vh;background-image:url(<?= asset('images/clinica/frente.jpg') ?>); opacity: 0"></div>

                <div class="slider-item slide1" style="height: 80vh;background-image:url(<?= asset('images/clinica/entrada3.jpg') ?>); opacity: 0"></div>

                <div class="slider-item" style="height: 80vh;background-image:url(<?= asset('images/clinica/entrada2.jpeg') ?>); opacity: 0"></div>

                <div class="slider-item" style="height: 80vh;background-image:url(<?= asset('images/clinica/corredor.jpg') ?>); opacity: 0"></div>

                <div class="slider-item" style="height: 80vh;background-image:url(<?= asset('images/clinica/sala3.jpg') ?>); opacity: 0"></div>

                <div class="slider-item" style="height: 80vh;background-image:url(<?= asset('images/clinica/sala4.jpg') ?>); opacity: 0"></div>

                <div class="slider-item" style="height: 80vh;background-image:url(<?= asset('images/clinica/placa.jpg') ?>); opacity: 0"></div>
              </div>

          </div>
      </div>
  </section>


  <!-- <section class="promo-video">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="block text-center">
                      <h6>Aperte o play e</h6>
                      <h1>Conheça a <br>
                          Clínica Similia
                      </h1>
                        <li><a class="fancybox" href="#single-video"><i class="fa fa-play"></i></a></li>
                      

                      <div id="single-video" class="fancybox-video">
                        <video controls width="100%" height="auto">
                          <source src="images/video/videoplayback.mp4" type="video/mp4">   
                        </video>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> -->

  </div>
</body>

@include('templates.footer')

@include('templates.scripts')

<script type="text/javascript">
  $(function(){
    $(".slider-item").css("visibility", "initial !important");
  });
</script>

</html>