<?php
include_once 'templates/header.inc.php';
include_once 'templates/navbar.inc.php';
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-md-12 hero">
      <img src="img/servicios.jpg" class="img-fluid" alt="">
      <h2 class="d-none d-md-block py-3 px-5">SERVICIOS</h2>
    </div>
  </div>
</div>
<div class="container pt-4">
  <div class="row">
    <main class="col-lg-8 main-content">
      <h2 class="d-block d-md-none text-center">SERVICIOS</h2>
      <div id="services">
        <div class="card">
          <a href="#" data-toggle="collapse" data-target="#description1" aria-expanded="true" aria-controls="#description1">
            <div class="card-header" id="service1">
                <h4 class="m-0">Servicio 1</h4>
            </div>
          </a>
          <div id="description1" class="collapse show" aria-labelledby="service1" data-parent="#services">
            <div class="card-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed eros quis arcu ultrices faucibus. Nunc ac nunc in tellus auctor iaculis et eget lorem. Aliquam ac lobortis nisi. Integer ullamcorper ornare velit, in hendrerit purus laoreet quis. Curabitur aliquam tempus facilisis. Fusce fermentum lacus nunc, non consectetur libero semper in. Aliquam eu sem non nisi vehicula suscipit. Nunc eget est at magna sollicitudin fermentum. Sed sed mauris quis purus tincidunt tincidunt sed id nunc.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="#" data-toggle="collapse" data-target="#description2" aria-expanded="true" aria-controls="#description2">
            <div class="card-header" id="service2">
                <h4 class="m-0">Servicio 2</h4>
            </div>
          </a>
          <div id="description2" class="collapse" aria-labelledby="service2" data-parent="#services">
            <div class="card-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed eros quis arcu ultrices faucibus. Nunc ac nunc in tellus auctor iaculis et eget lorem. Aliquam ac lobortis nisi. Integer ullamcorper ornare velit, in hendrerit purus laoreet quis. Curabitur aliquam tempus facilisis. Fusce fermentum lacus nunc, non consectetur libero semper in. Aliquam eu sem non nisi vehicula suscipit. Nunc eget est at magna sollicitudin fermentum. Sed sed mauris quis purus tincidunt tincidunt sed id nunc.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <a href="#" data-toggle="collapse" data-target="#description3" aria-expanded="true" aria-controls="#description3">
            <div class="card-header" id="service3">
                <h4 class="m-0">Servicio 3</h4>
            </div>
          </a>
          <div id="description3" class="collapse" aria-labelledby="service3" data-parent="#services">
            <div class="card-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed eros quis arcu ultrices faucibus. Nunc ac nunc in tellus auctor iaculis et eget lorem. Aliquam ac lobortis nisi. Integer ullamcorper ornare velit, in hendrerit purus laoreet quis. Curabitur aliquam tempus facilisis. Fusce fermentum lacus nunc, non consectetur libero semper in. Aliquam eu sem non nisi vehicula suscipit. Nunc eget est at magna sollicitudin fermentum. Sed sed mauris quis purus tincidunt tincidunt sed id nunc.
              </p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <aside class="col-lg-4 pt-4 pt-lg-0">
      <div class="sidebar text-center p-4">
        <h3 class="my-4">NUEVOS<br>CLIENTES</h3>
        <p>Recibe el 20% de descuento con <br>este cupón:</p>
        <p class="ticket lead p-3"><span class="h2">20% DESCUENTO</span><br>EN TODOS LOS SERVICIOS</p>
      </div>
    </aside>
  </div>
</div>
<div class="appointments container-fluid py-5 mt-5">
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
include_once 'templates.footer.inc.php';
?>    
