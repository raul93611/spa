<?php
include_once 'templates/header.inc.php';
include_once 'templates/navbar.inc.php';
?>
<div class="container">
  <div class="carousel slide mt-4" id="main-slider" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <li data-target="#main-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="img/slide_01.jpg" alt="Nuestras instalaciones">
        <div class="carousel-caption">
          <h3>NUEVAS INSTALACIONES</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide_02.jpg" alt="Conoce nuestros servicios">
        <div class="carousel-caption">
          <h3>CONOCE NUESTROS SERVICIOS</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide_03.jpg" alt="Promocion">
        <div class="carousel-caption">
          <h3>NUESTRO SITIO WEB, 2X1 EN TODOS NUESTROS SERVICIOS</h3>
        </div>
      </div>
    </div>
    <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a href="#main-slider" class="carousel-control-next" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>
<section class="new-site mt-5">
  <h2 class="text-center">
    <span class="d-block">bienvenido a nuestro</span> SITIO WEB
  </h2>
  <p class="text-center mt-4">Te sentiras como nuevo con nuestros <br> masajistas profesionales</p>
</section>
<div class="container">
  <div class="row">
    <div class="col-md-4 text-center">
      <div class="service-image">
        <img src="img/servicio_01.jpg" alt="" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 service-info">
            <h2 class="text-center mt-4">
              <span class="d-block">conoce sobre</span> nosotros
            </h2>
            <a href="#" class="btn btn-primary btn-lg btn-block mt-4">LEER MAS</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="service-image">
        <img src="img/servicio_02.jpg" alt="" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 service-info">
            <h2 class="text-center mt-4">
              <span class="d-block">nuestros</span> servicios
            </h2>
            <a href="#" class="btn btn-primary btn-lg btn-block mt-4">LEER MAS</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center">
      <div class="service-image">
        <img src="img/servicio_03.jpg" alt="" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 service-info">
            <h2 class="text-center mt-4">
              <span class="d-block">visita nuestra</span> tienda
            </h2>
            <a href="#" class="btn btn-primary btn-lg btn-block mt-4">LEER MAS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="schedules mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-center">
        <h3 class="mt-5">HORARIOS</h3>
        <p class="my-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In scelerisque odio eu velit vestibulum iaculis. Duis ac sollicitudin ex, vitae mattis tortor. Maecenas volutpat justo et nibh vulputate, eu sagittis leo dignissim. Nunc vel nibh ultricies, vestibulum tortor et, finibus elit. Etiam auctor ornare felis eu volutpat. Praesent tristique ex erat, quis congue ipsum sollicitudin placerat. Sed dictum risus tincidunt, porta leo sed, commodo neque.</p>
        <table class="table">
          <thead>
            <tr class="p-5">
              <th>Día</th>
              <th>De</th>
              <th>Hasta</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lunes</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr>
            <tr>
              <td>Martes</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr><tr>
              <td>Miercoles</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr><tr>
              <td>Jueves</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr><tr>
              <td>Viernes</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr><tr>
              <td>Sabado</td>
              <td>09:00</td>
              <td>19:00</td>
            </tr><tr>
              <td>Domingo</td>
              <td>Closed</td>
              <td>Closed</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6 schedule-img">
      </div>
    </div>
  </div>
</div>
<section class="container products my-5">
  <h2 class="text-center mb-5">
    <span class="d-block">nuestros</span> productos
  </h2>
  <div class="row">
    <div class="col-md-3">
      <a href="#">
        <div class="card">
          <img class="card-img-top" src="img/producto_mini_01.jpg">
          <div class="card-body">
            <h3 class="card-title text-center">PRODUCTO 1</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="text-center lead">$25</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="#">
        <div class="card">
          <img class="card-img-top" src="img/producto_mini_02.jpg">
          <div class="card-body">
            <h3 class="card-title text-center">PRODUCTO 2</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="text-center lead">$25</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="#">
        <div class="card">
          <img class="card-img-top" src="img/producto_mini_03.jpg">
          <div class="card-body">
            <h3 class="card-title text-center">PRODUCTO 3</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="text-center lead">$25</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="#">
        <div class="card">
          <img class="card-img-top" src="img/producto_mini_04.jpg">
          <div class="card-body">
            <h3 class="card-title text-center">PRODUCTO 4</h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p class="text-center lead">$25</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>
<div class="appointments container-fluid py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <h3>REALIZA UNA CITA</h3>
      <p class="my-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sodales risus nec elementum egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec finibus turpis non ipsum malesuada, id tincidunt felis laoreet. Praesent nulla metus, pellentesque sit amet dictum ac, scelerisque ut risus. Ut fringilla neque non sem lobortis, in semper nunc tempus. Nullam blandit lacinia est vitae fringilla. Aliquam molestie, mauris eget placerat condimentum, dolor felis ornare arcu, ac porta tellus sem id felis. Donec imperdiet gravida magna eu euismod. Aliquam urna arcu, maximus nec lectus condimentum, auctor congue purus. Fusce sit amet gravida massa. Aliquam ac dolor risus. Donec feugiat justo quis sem sollicitudin, vitae dapibus orci fermentum.
      </p>
      <a href="#" class="btn btn-primary btn-lg">LEER MÁS</a>
    </div>
  </div>
</div>
<?php
include_once 'templates/footer.inc.php';
?>
