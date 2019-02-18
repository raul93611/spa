<?php
include_once 'templates/header.inc.php';
include_once 'templates/navbar.inc.php';
?>
<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-md-12 hero">
      <img src="img/nosotros.jpg" class="img-fluid" alt="">
      <h2 class="d-none d-md-block py-3 px-5">CONTACTO</h2>
    </div>
  </div>
</div>
<div class="container pt-4">
  <div class="row justify-content-center">
    <main class="col-lg-8 main-content">
      <h2 class="d-block d-md-none text-center">CONTACTO</h2>
      <div class="m-5 p-5 contact">
        <form action="" method="post" class="needs-validation" novalidate>
          <div class="form-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" class="form-control" value="" required>
            <div class="invalid-feedback">
              Nombre obligatorio
            </div>
            <div class="valid-feedback">
              Correcto
            </div>
          </div>
          <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" class="form-control" value="" required>
            <div class="invalid-feedback">
              Email obligatorio
            </div>
            <div class="valid-feedback">
              Correcto
            </div>
          </div>
          <div class="form-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" rows="5" class="form-control" required></textarea>
            <div class="invalid-feedback">
              Mensaje obligatorio
            </div>
            <div class="valid-feedback">
              Correcto
            </div>
          </div>
          <button type="submit" class="btn btn-primary px-5" name="send">ENVIAR</button>
        </form>
      </div>
    </main>
  </div>
</div>
<?php
include_once 'templates.footer.inc.php';
?>
