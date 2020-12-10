@extends('layout')

@section('main')
<section id="entrenar" class="features">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
          <h3>ENCUENTRA EL MEJOR ENTRENADOR PARA TÍ</h3>
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item" data-aos="fade-up">
              <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                <h4>Busca y encuentra</h4>
                <p>Entrenadores para practicar tu deporte favorito</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
              <a class="nav-link" data-toggle="tab" href="#tab-2">
                <h4>Elige y suscribete</h4>
                <p>Con el entrenador que más te guste.</p>
              </a>
            </li>
            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
              <a class="nav-link" data-toggle="tab" href="#tab-3">
                <h4>Entrena</h4>
                <p>Con sus videos en cualquier momento y comunicate directamente</p>
              </a>
            </li>            
          </ul>            
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <figure>
                <img src="img/entrenar-1.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-2">
              <figure>
                <img src="img/features-4.png" alt="" class="img-fluid">
              </figure>
            </div>
            <div class="tab-pane" id="tab-3">
              <figure>
                <img src="img/entrenar-1.png" alt="" class="img-fluid">
              </figure>
            </div>              
          </div>
        </div>     
      </div>
      <div class="row">
        <div class="col-lg-12 order-1">
          <!--<a class="nav-link" data-toggle="tab" href="#tab-1">-->
            <h4>Pre inscribete</h4>
            <form id="leadform" action="php/lead-form.php" method="POST" role="form" class="php-email-form" >
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="email1">Tu correo</label>
                      <input type="email" class="form-control" name="email1" id="email1" data-rule="email" data-msg="Por favor ingresa un email válido" />
                      <div class="validate"></div>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                  </div>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
              </div>
              <div class="mb-3">
                  <div class="loading">Cargando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pronto nos pondremos en contacto</div>
                </div>                    
              <!--<input type="email" id="email1" name="email" style="margin-right: 3%;" placeholder="correo@ejemplo.com">-->
              <input type="submit" class="btn" value="Enviar">                                        
            </form>                                    
          <!--</a>-->
          </div>


      </div>

    </div>
  </section><!-- End Features Section -->

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container">
  
          <div class="row">
            <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
              <h3>BUSCA CLASES PERSONALIZADAS</h3>
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item" data-aos="fade-up">
                  <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                    <h4>Puedes reservar</h4>
                    <p>Clases personalizadas por medio de nuestra herramienta y lograr los mejores resultados de la mano de profesionales.</p>
                  </a>
                </li>                  
              </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <figure>
                    <img src="img/entrenar-4.png" alt="" class="img-fluid">
                  </figure>
                </div>
                <div class="tab-pane" id="tab-2">
                  <figure>
                    <img src="img/features-2.png" alt="" class="img-fluid">
                  </figure>
                </div>                
              </div>
            </div>
          </div>    
        </div>
      </section><!-- End Features Section -->
@endsection
