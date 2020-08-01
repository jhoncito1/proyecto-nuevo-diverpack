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
                    <h3 class="card-title">Tarjetas debito</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">

                    <!-- Button trigger modal -->
                    <div class="float-xl-right">
                      <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalNuevo" class="float-xl-right">
                        <img src="assets/Icon/insert.png" width="30" height="30" class="d-inline-block align-top" alt="">
                      </button>
                    </div>

                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>nombre</th>
                          <th>apellido</th>
                          <th>banco</th>
                          <th>numero tarjeta</th>
                          <th>codigo seguridad</th>
                          <th>fecha vencimiento</th>
                          <th>OPCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach (parent::get_all() as $result) { ?>
                          <tr>
                            <td><?php echo $result->id_tarjeta_d ?></td>
                            <td><?php echo $result->nombre ?></td>
                            <td><?php echo $result->apellido ?></td>
                            <td><?php echo $result->nombre_banco ?></td>
                            <td><?php echo $result->numero_de_tarjeta ?></td>
                            <td><?php echo $result->codigo_seguridad ?></td>
                            <td><?php echo $result->fecha_vencimiento ?></td>
                            <td>
                              <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-light btn-sm">
                                  <img src="assets/Icon/read.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                </button>
                                <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#modalEdit">
                                  <img src="assets/Icon/editN.png" width="30" height="30" class="d-inline-block align-top" alt="">
                                </button>
                                <a href="?clase=tcredito&method=delete&id=<?php echo $result->id_tpago ?>">
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
                          <td colspan="5"><?php echo count(parent::get_all()); ?> Tipos de pago registrados</td>
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
            <h5 class="modal-title" id="exampleModalLabel">Nuevo tarjeta credito</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="?clase=tcredito&method=guardar" method="POST">
              <div class="form-group">
                <label for="">nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
              </div>

              <div class="form-group">
                <label for="">apellido</label>
                <input type="numb" id="apellido" name="apellido" class="form-control">

              </div>
              <div class="form-group">
                <label for="">banco</label>
                <input type="text" id="banco" name="banco" class="form-control">
              </div>
              <div class="form-group">
                <label for="">numero tarjeta</label>
                <input type="text" id="numerotarjeta" name="numerotarjeta" class="form-control">
              </div>
              <div class="form-group">
                <label for="">banco</label>
                <input type="text" id="nombre_banco" name="nombre_banco" class="form-control">
              </div>
              <div class="form-group">
                <label for="">numero tarjeta </label>
                <input type="text" id="numero_de_tarjeta" name="numero_de_tarjeta" class="form-control">
              </div>
              <div class="form-group">
                <label for="">fecha vencimiento </label>
                <input type="text" id="fecha vencimiento" name="fecha vencimiento" class="form-control">
              </div>
              <br>
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
            <h5 class="modal-title" id="exampleModalLabel">Modificar método de pago</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="?clase=pagos&method=guardar" method="POST">
              <div class="form-group">
                <label for="">Siglas</label>
                <input type="text" id="siglas" name="siglas" class="form-control">
              </div>

              <div class="form-group">
                <label for="">Metodo de pago</label>
                <input type="numb" id="tpago" name="tpago" class="form-control">
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
</html>