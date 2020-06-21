
    <div class="content-wrapper">
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">

                <!-- /.card-header -->


                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Detalles de roles</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="float-xl-right">
                      <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalNuevo" class="float-xl-right">
                        <img src="assets/Icon/insert.png" width="30" height="30" class="d-inline-block align-top" alt="">
                      </button>
                    </div>

                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>ROL</th>
                          <th>DESCRIPCION</th>
                          <th>OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (parent::get_all() as $result) { ?>
                          <tr>
                            <td><?php echo $result->id_rol ?></td>
                            <td><?php echo $result->nombre_rol ?></td>
                            <td><?php echo $result->descripcion ?></td>
                            <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-ajax btn-light btn-sm " data-user="<?php echo $result->id_rol ?>">
                                  <img src="assets/Icon/read.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                </button>
                                <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#modalEdit">
                                  <img src="assets/Icon/editN.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                </button>
                                <a href="?clase=roles&method=delete&id=<?php echo $result->id_rol ?>">
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
                          <th>ID</th>
                          <th>ROL</th>
                          <th>DESCRIPCION</th>
                          <th>OPCIONES</th>
                        </tr>
                        <tr>
                          <td colspan="5"><?php echo count(parent::get_all()); ?> Roles registrados</td>
                        </tr>
                      </tfoot>
                    </table>
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
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo rol</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="?clase=roles&method=guardar" method="POST">
              <div class="form-group">
                <label for="">Nombre rol</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
              </div>

              <div class="form-group">
                <label for="">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
              </div><br>
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


    <!-- Modal editar-->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar rol</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="">Nombre rol</label>
                <input type="text" id="siglas" name="siglas" value="<?php if($rol) echo $rol['siglas']; ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="">Descripcion</label>
                <textarea name="descripcion" id="descripcion" value="<?php if($rol) echo $rol['descripcion']; ?>" class="form-control"></textarea>
              </div><br>
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

              <table >
                  <tr>
                      <td>ID: </td>
                      <td><?php echo $rol->id_rol ?></td>
                  </tr>
                  <tr>
                      <td>NOMBRE: </td>
                      <td><?php echo $rol->nombre_rol?></td>
                  </tr>
                  <tr>
                      <td>DESCRIPCION: </td>
                      <td><?php echo $rol->descripcion ?></td>
                  </tr>
              </table>

          </div>
        </div>
      </div>
    </div>
 