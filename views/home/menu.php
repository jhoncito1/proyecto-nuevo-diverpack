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
  <!-- <link rel="stylesheet" href="assets/css/homeMenu.css"> -->
  <title>Hello, world!</title>
</head>

<body>
  <div class="container sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="?clase=home&method=index">
          <img src="assets/Icon/logo1.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Actividad MVC
        </a>
      </nav>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="?clase=home&method=index">Bienvenidos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?clase=home&method=quiensomos">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?clase=home&method=contacto">Contacto</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?clase=home&method=acercade">Acerca de</a>
          </li>
        </ul>
      </div>



      <form class="form-inline my-2 my-lg-0" style="float: right">

        <a href="?clase=admin&method=index">
          <button type="button" class="btn btn-primary">Admin</button>
        </a>

        <a href="?clase=productos&method=index">
          <img src="assets/Icon/nuevo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <a href="?clase=admin&method=index">
          <img src="assets/Icon/buscar.png" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <a href="?clase=admin&method=index2">
          <img src="assets/Icon/carrito.png" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
      </form>
  </div>
  </nav>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>