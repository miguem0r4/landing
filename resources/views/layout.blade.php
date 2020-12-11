<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SportSpot</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="img/favicon.png" rel="icon">  
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->
<link rel="icon" href="{!! asset('img/favicon.png') !!}" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!--<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{!! asset('vendor/bootstrap/css/bootstrap.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/icofont/icofont.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/boxicons/css/boxicons.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/venobox/venobox.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/owl.carousel/assets/owl.carousel.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('vendor/aos/aos.css') !!}">

  <!-- Template Main CSS File 
  <link href="assets/css/style.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="{!! asset('css/style.css') !!}">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Soy entrenador</a></li>
          <li><a href="/entrenar">Quiero entrenar</a></li>
          <li><a href="#contact">Contactanos</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  
<!-- ======= Hero Section ======= -->
<section id="hero">

  <div class="container">        
    <div class="row">
      @yield('hero')      
    </div>
  </div>

</section><!-- End Hero -->


  <main id="main">

    @yield('main')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Hablemos</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">              
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Correo:</h4>
                <p>contacto@sportspot.com.co</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Celular:</h4>
                <p>+57 305 2622766</p>
              </div>

              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>-->
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form id="contactForm" method="POST" action= {{ url('contacto') }} role="form" class="php-email-form">
                {{ csrf_field() }}
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Tu nombre</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Tu correo</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <!--<div class="form-group">
                <label for="name">Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>-->
              <div class="form-group">
                <label for="name">Mensaje</label>
                <textarea class="form-control" id="message" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje ha sido enviado, gracias!</div>
              </div>
              <div class="text-center"><button type="submit" id="form-submit">Enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-6 footer-links">            
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/tyc">Política de datos</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>/SPORTSPOTCOLOMBIA</h3>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/SportSpotColombia" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/sportspotcolombia" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>                    
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SportSpot</span></strong>. All Rights Reserved
      </div>      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <script type="text/javascript" src="{!! asset('vendor/jquery/jquery.min.js') !!}" sync></script>
  <script type="text/javascript" src="{!! asset('vendor/jquery.easing/jquery.easing.min.js') !!}" sync></script>
  <script type="text/javascript" src="{!! asset('vendor/owl.carousel/owl.carousel.min.js') !!}" sync></script>

  <script type="text/javascript" src="{!! asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}" async></script>
  <script type="text/javascript" src="{!! asset('vendor/php-email-form/validate.js') !!}" async></script>
  <script type="text/javascript" src="{!! asset('vendor/isotope-layout/isotope.pkgd.min.js') !!}" async></script>
  <script type="text/javascript" src="{!! asset('vendor/venobox/venobox.min.js') !!}" async></script>  
  <script type="text/javascript" src="{!! asset('vendor/aos/aos.js') !!}" async></script>
  <script type="text/javascript" src="{!! asset('js/main.js') !!}" async></script>

</body>

</html>