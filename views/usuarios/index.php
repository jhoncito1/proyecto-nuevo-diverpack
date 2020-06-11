<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Adiminnistrador</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="views/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="?clase=home&method=index" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <?php echo $_SESSION['USER']->primer_nombre?>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i class="fas fa-th-large"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="?clase=admin&method=index" class="brand-link">
        <img src="views/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Administración</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="views/admin/dist/img/hh.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">DiverPark</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Paginas activas
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Activar pagina</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Desactivar pagina</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Simple Link
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Registros
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="?clase=roles&method=index" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>roles</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?clase=productos&method=index" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Productos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?clase=pagos&method=index" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>metodos de pago</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="views/admin/pages/tables/jsgrid.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Usuarios</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>

      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">

                <!-- /.card-header -->


                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Detalles de usuarios</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="float-xl-right">
                      <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalNuevo" class="float-xl-right">
                        <img src="assets/Icon/insert.png" width="30" height="30" class="d-inline-block align-top" alt="">
                      </button>
                    </div>
                    <div class="table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>DOCUMENTO</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>DEPARTAMENTO</th>
                            <th>CUIDAD</th>
                            <th>DIRECCION</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                            <th>OPCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach (parent::get_all() as $result) { ?>
                            <tr>
                              <td><?php echo $result->siglas ?> <?php echo $result->numero_documento ?></td>
                              <td><?php echo $result->primer_nombre ?> <?php echo $result->segundo_nombre  ?></td>
                              <td><?php echo $result->primer_apellido ?> <?php echo $result->segundo_apellido ?></td>
                              <td><?php echo $result->departamento ?></td>
                              <td><?php echo $result->ciudad ?></td>
                              <td><?php echo $result->direccion ?></td>
                              <td><?php echo $result->email ?></td>
                              <td><?php echo $result->telefono ?></td>
                              <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                  <button type="button" class="btn btn-light btn-sm btnmodal" data-user="<?php echo $result->id_rol ?>">
                                    <img src="assets/Icon/read.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                  </button>
                                  <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#modalEdit">
                                    <img src="assets/Icon/editN.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                  </button>
                                  <a href="?clase=usuarios&method=delete&id=<?php echo $result->id_rol ?>">
                                    <button type=" button" class="btn btn-light btn-sm">
                                      <img src="assets/Icon/delete.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                    </button>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          <?php   } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>DOCUMENTO</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>DEPARTAMENTO</th>
                            <th>CUIDAD</th>
                            <th>DIRECCION</th>
                            <th>CORREO</th>
                            <th>TELEFONO</th>
                          </tr>
                          <td colspan="5"><?php echo count(parent::get_all()); ?> Usuarios registrados</td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </section>


    </div>
    <!-- /.content-wrapper -->

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
                      <label required for="">rol</label>
                        <select id="inputState" name="tipo" class="form-control">
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
                        <select id="inputState" name="tipo" class="form-control">
                            <option selected>Seleccione</option>
                            <?php foreach (roles::get_all() as $result) { ?>
                                <option value="<?php echo $result->id_tipodoc ?>">
                                    <?php echo ucwords( $result->nombre_tipo_doc);?><br>
                                </option>
                            <?php } ?>

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



    <!-- Modal editar-->--------------------------------------------------------------------------------------------------------------------------------
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <div class="form-grup">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-6 col-sm-6">
                      <label for="">Numero documento</label>
                      <input required type="text" id="documento" name="documento" class="form-control">
                    </div>
                    <div class="col-6 col-sm-6">
                      <label for="">Tipo documento</label>

                      <div class="dropdown">
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                          Seleccionar
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">1</a>
                          <a class="dropdown-item active" href="#">2</a>
                          <a class="dropdown-item disabled" href="#">3</a>
                        </div>
                      </div>
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
                      <label required for="">rol</label>
                      <input type="number" id="rol" name="rol" class="form-control">
                    </div>
                    <div class="col-6 col-sm-6">
                      <label required for="">Estado</label>
                      <input type="number" id="estado" name="estado" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal detalles-->
    <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar rol</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="detailRol">

            <!-- <div class="row">
              <div class="col-md-4"><br>

                <table class="table table-bordered table-sm">
                  <tr>
                    <td class="bg-secondary">nombre</td>
                    <td><?php echo $rol->nombre ?></td>
                  </tr>
                  <tr>
                    <td class="bg-secondary">nombre</td>
                    <td><?php echo $rol->nombre ?></td>
                  </tr>
                  <tr>
                    <td class="bg-secondary">nombre</td>
                    <td><?php echo $rol->nombre ?></td>
                  </tr>
                </table>
              </div>
            </div> -->

          </div>
        </div>
      </div>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="assets/js/jquery.js"></script>
  <!-- <script src="views/admin/plugins/jquery/jquery.min.js"></script> -->
  <!-- Bootstrap 4 -->
  <script src="views/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/app.js"></script>
  <!-- AdminLTE App -->
  <script src="views/admin/dist/js/adminlte.min.js"></script>

</body>

</html>