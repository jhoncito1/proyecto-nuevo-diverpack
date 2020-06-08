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

  <title>Hello, world!</title>
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
        <div class="carousel-item active">
          <img src="assets/img/im2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Bienvenidos</h1>
            <p>Esta es la pacgina principal de este sitio</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/im3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Amanecer en la playa</h1>
            <p>las vacaciones anheladas por todos...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/im1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h1>Libetrad</h1>
            <p>hay qie seguir el camino para llegar bien lejos...</p>
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
    </div>
  </div>

  <div class="container ">

    <br>
    <h4><b> Pagina de Bienevenida</b></h4><br>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium impedit molestias perspiciatis molestiae eligendi exercitationem architecto. Tempora incidunt eveniet consectetur accusantium. Vel eius, hic cumque provident quos modi mollitia each
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate mollitia velit, iusto quasi quas adipisci ipsa sapiente nobis officia quam sit architecto perspiciatis quo exercitationem dolor dignissimos eum asperiores officiis!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab distinctio ex, pariatur quis voluptatum modi repellat omnis velit? Quis dicta architecto enim praesentium ab itaque nam. Aliquam voluptatem iure provident.
  </div>

  <footer id="contacto">
    <?php
    include 'footer.php';
    ?>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="/__/firebase/7.14.6/firebase-app.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="/__/firebase/7.14.6/firebase-analytics.js"></script>

  <!-- Initialize Firebase -->
  <script src="/__/firebase/init.js"></script>
</body>

</html>