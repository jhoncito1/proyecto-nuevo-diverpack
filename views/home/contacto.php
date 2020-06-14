<?php
  require_once "menu.php"
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Actividad MVC</title>
</head>
<body>
  
  
<?php
require_once "menu.php"
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title></title>
</head>

<body>
  <div class="container">

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <a class="carousel-item active" href="http://google.com" target="_blank">
          <img src="assets/img/649508_1.jpg" href="https://es-la.facebook.com" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>DiverPark.com</h1>
            <p>Agencia de parques de diversión</p>
          </div>
</a>
        <div class="carousel-item">
          <img src="assets/img/1557869448_370614_1557869606_noticia_normal.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>DiverPark.com</h1>
            <p>Agencia de parques de diversión</p>
          </div> 
        </div>
        <div class="carousel-item">
          <img src="assets/img/unnamed.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>DiverPark.com</h1>
            <p>Agencia de parques de diversión</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <div class="container">
<div class="box">
  <div class="row">
    <div class="col-lg-12">
      <hr>
        <h2 class="intro-text text-center">Contacto
        <strong>Diverpark S.A.S.</strong>
        </h2>
      </hr>
      <br>
    </div>
    <div class="col-md-8">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15907.072464507288!2d-74.1569192!3d4.6354102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc2264bd32d6242df!2sDIVERPARK%20F%26F%20LTDA.!5e0!3m2!1ses-419!2sco!4v1591553751230!5m2!1ses-419!2sco" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-md-4">
      <p> Telefono:
        <strong>320.442.86.43</strong>
      </p>
      <p> Email:
        <strong> <a href="mailto:diverpark@gmail.com"> Diverpark@gmail.com </a></strong>
      </p>
      <p> Direcciión:
        <strong>3481 Kennedy
        <br>Barrio Maria paz
        </strong>
      </p>
    </div>
  </div>
</div>
<div class="box">
  <div class="row">
    <div class="col-lg-12">
      <hr>
        <h2 class="intro-text text-center">Contacto
        <strong>Fomato</strong>
        </h2>
      </hr>
      <p>
        Diverpark es una empresa dedicada a la fabricación de parques infantiles, biosaludables, parques en madera y ofrece distintas variedades de servicios
        en todo lo relacionado a la fabricación de parques y entretenimiento, de esta misma manera brinda servicio de mantenimiento he instalación de todo lo relacionado
        a parques. 
      </p>
        <form>
          <div class="row">
            <div class="form-group col-lg-4">
              <label>Nombre</label>
              <imput type="text" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label>Email</label>
              <imput type="email" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label>Número de teléfono</label>
              <imput type="tel" class="form-control">
            </div>
            <div class="form-group col-lg-12">
              <label>Mensaje</label>
              <textarea class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <iput type="hilden" name="save" value="contact">
              <button type="submit" class="btn btn-warning">submit</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>         
</div>


    </div>
 </div>
 <footer id="contacto">
    <?php
    include 'footer.php';
    ?> 

<?php
//require_once "footer.php";
include_once "footer.php";
?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
 