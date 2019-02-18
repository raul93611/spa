<?php
include_once 'templates/header.inc.php';
include_once 'templates/navbar.inc.php';
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-md-12 hero">
      <img src="img/nosotros.jpg" class="img-fluid" alt="">
      <h2 class="d-none d-md-block py-3 px-5">NOSOTROS</h2>
    </div>
  </div>
</div>
<div class="container pt-4">
  <div class="row">
    <main class="col-lg-8 main-content">
      <h2 class="d-block d-md-none text-center">NOSOTROS</h2>
      <p class="text-justify">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut mi diam. Proin molestie laoreet suscipit. Proin nec mi non metus facilisis ullamcorper. Praesent eu laoreet orci, sed venenatis orci. Sed vel cursus libero. Nam pretium ornare cursus. Nullam eros enim, sollicitudin ornare felis sed, mollis molestie nisl. Nunc maximus sodales metus vitae pharetra. In ac eros quis mauris lacinia venenatis. Curabitur lacinia, nulla a faucibus bibendum, erat erat venenatis nunc, vitae maximus nisl lacus a mi. Fusce in lacinia quam. Proin sagittis, nulla quis pretium feugiat, arcu quam gravida lectus, eu finibus ipsum eros sed ligula. Proin ullamcorper in velit id scelerisque. Fusce venenatis risus urna, a ultrices odio elementum sit amet.
      </p>
      <p class="text-justify">
        Donec volutpat nisi id varius ullamcorper. Duis mi nisl, venenatis ut imperdiet a, ultrices ac nunc. Vivamus eu sem rutrum, euismod neque quis, porttitor nibh. Ut eget diam ac nisi porttitor efficitur. Maecenas feugiat vitae odio sit amet sagittis. Aliquam consequat nisi sed urna fermentum, nec mattis nisl pretium. Sed nec enim rhoncus, molestie dolor ut, efficitur dui. Donec eleifend est vel risus sodales, at maximus justo molestie.
      </p>
      <h2 class="text-center mt-5">
        <span class="d-block">conoce nuestras</span> INSTALACIONES
      </h2>
      <div class="images pt-4 text-center">
        <a href="#" data-target="#image-1" data-toggle="modal">
          <img src="img/galeria_mini_01.jpg" class="img-fluid" alt="">
        </a>
        <a href="#" data-target="#image-2" data-toggle="modal">
          <img src="img/galeria_mini_02.jpg" class="img-fluid" alt="">
        </a>
        <a href="#" data-target="#image-3" data-toggle="modal">
          <img src="img/galeria_mini_03.jpg" class="img-fluid" alt="">
        </a>
        <div class="modal fade" id="image-1" tabindex="-1" role="dialog" aria-labelledby="Imagen 1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/galeria_grande_01.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="image-2" tabindex="-1" role="dialog" aria-labelledby="Imagen 2" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/galeria_grande_02.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="image-3" tabindex="-1" role="dialog" aria-labelledby="Imagen 3" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <img src="img/galeria_grande_03.jpg" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
      <div class="sidebar">
        <div class="schedules">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="mt-5">HORARIOS</h3>
                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In scelerisque odio eu velit vestibulum iaculis. Duis ac sollicitudin ex, vitae mattis tortor. Maecenas volutpat justo et nibh vulputate, eu sagittis leo dignissim. Nunc vel nibh ultricies, vestibulum tortor et, finibus elit. Etiam auctor ornare felis eu volutpat. Praesent tristique ex erat, quis congue ipsum sollicitudin placerat. Sed dictum risus tincidunt, porta leo sed, commodo neque.</p>
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
            </div>
          </div>
        </div>
      </div>
    </aside>
  </div>
</div>
<?php
include_once 'templates.footer.inc.php';
?>
