<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Actividad MVC</title>
</head>

<body>

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="assets/img/avatardefault.svg" width="80" height="80">
                </div>
                <form class="col-12" action="?clase=security&method=auth_user" method="POST">
                    <div class="form-group" id="user-group">
                        <!-- <label for="">Usuario</label> -->
                        <input required type="text" name="email" placeholder=" correo@ejemplo.com" class="form-control">
                    </div>
                    <div class="form-group" id="password-group">
                        <!-- <label for="">Contraseña</label> -->
                        <input type="password" name="password" placeholder="contraseña" class="form-control">
                    </div>
                    <div class="form-group" id="password-group">
                        <button class="btn btn-primary type=" submit"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</button>
                    </div>
                    <div class="footer">
                        <a href="">olvide mi contaseña </a><br>
                        <i data-toggle="modal" data-target="#modalNuevo">Registarse </i>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Modal Nuevo-->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="?clase=usuarios&method=guardar" method="POST">
              <!-- <div class="form-grup">
                <label for="">Avatar</label>
                <input  type="img" id="imagen" name="imagen" class="form-control">
              </div> -->

              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label for="">Numero documento</label>
                      <input required type="text" id="documento" name="documento" class="form-control">
                    </div>
                    <div class="col-6 col-sm-6">
                      <label for="">Tipo documento</label>
                      <select id="inputState" name="tipo" class="form-control">
                        <option selected>Seleccione</option>
                        <?php foreach (tdocumento::get_all() as $result) { ?>
                          <option value="<?php echo $result->id_tipodoc ?>">
                            <?php echo ucwords( $result->nombre_tipo_doc);?><br>
                          </option>
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                </div>
              </div>


              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label for="">Primer nombre</label>
                      <input required type="text" id="nombre1" name="nombre1" class="form-control">
                    </div>
                    <div class="col-6 col-sm-6">
                      <label for="">Segundo nombre</label>
                      <input type="text" id="nombre2" name="nombre2" class="form-control"></div>
                  </div>
                </div>
              </div>

              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label for="">Primer apellido</label>
                      <input required type="text" id="apellido1" name="apellido1" class="form-control">
                    </div>
                    <div class="col-6 col-sm-6">
                      <label for="">Segundo apellido</label>
                      <input type="text" id="apellido2" name="apellido2" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label for="">Departamento</label>
                      <input required type="text" id="departamento" name="departamento" class="form-control">
                    </div>
                    <div class="col-6 col-sm-6">
                      <label for="">Ciudad</label>
                      <input required type="text" id="ciudad" name="ciudad" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label for="">Direccion</label>
                      <input required type="text" id="direccion" name="direccion" class="form-control">
                    </div>
                    <div class="col-6 col-sm-6">
                      <label for="">Correo</label>
                      <input required type="text" id="email" name="email" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label for="">Contraseña</label>
                      <input required type="text" id="password" name="password" class="form-control">
                    </div>
                    <div class="col-6 col-sm-6">
                      <label for="">Confirmar Contrseña</label>
                      <input required type="text" id="confirmar_password" name="confirmar_password" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label required for="">Telefono</label>
                      <input type="number" id="telefono" name="telefono" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label required for="rol">rol</label>
                        <select id="inputState" name="rol" class="form-control">
                            <option selected>Seleccione</option>
                            <?php foreach (roles::get_all() as $result) { ?>
                                <option value="<?php echo $result->id_rol ?>">
                                    <?php echo ucwords( $result->nombre_rol);?><br>
                                </option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="col-6 col-sm-6">
                      <label required for="">Estado</label>
                        <select id="inputState" name="estado" class="form-control">
                            <option selected>Seleccione</option>
                          
                                <option value="1">
                                    Activo
                                </option>
                                 <option value="0">
                                    Inactivo
                                </option>

                        </select>
                    </div>
                  </div>
                </div>
              </div>


              <!-- <button class="btn btn-primary type=" submit">Guardar</button> -->
              <!-- <a href="?clase=productos&method=index">Cancelar</a> -->
              <div class="modal-footer">
                <button class="btn btn-primary type=" submit">Guardar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>