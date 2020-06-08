<?php
class pagosController extends pagos
{
    public function index()
    {
        require_once('views/pagos/index.php');
    }

    public function guardar()
    {
        parent::guardarp($_POST['siglas'], $_POST['tpago']);
        header("location:?clase=pagos&method=index");
    }

    public function delete()
    {
        parent::deletep($_GET['id']);
        header("location:?clase=pagos&method=index");

        //require_once('views/productos/delete.php');
    }
}