<?php
class tcreditoController extends tcredito
{
    public function index()
    {
        require_once('views/tcredito/index.php');
    }

    public function insert()
    {
        require_once('views/tcredito/insert.php');
    }

    public function guardar()
    {
        parent::guardar_tc($_POST['nombre'], $_POST['apellido'], $_POST['banco'], $_POST['numero_t']);
        header("location:?clase=tcredito&method=index");
    }
 
    public function delete()
    {
        parent::delete_tc($_GET['id']);
        header("location:?clase=tcredito&method=index");

        //require_once('views/productos/delete.php');
    }
}