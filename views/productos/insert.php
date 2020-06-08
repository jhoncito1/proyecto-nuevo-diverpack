<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4"><br>
        <form action="?clase=productos&method=guardar" method="POST">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                
            </div>
            <div class="form-group">
                <label for="">Precio</label>
                <input type="numb" id="precio" name="precio" class="form-control">
            </div><br>
            <button class="btn btn-primary type="submit">guardar registro</button> <a href="?clase=productos&method=index">Cancelar</a>
        </form>
      </div>
    </div>
  </div>
</body>

</html>