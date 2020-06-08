<?php
class tdebitoController extends tdebito
{
    public function index()
    {
        require_once('views/tdebito/index.php');
    }

    

    // public function guardar()
    // {
    //     parent::guardar_td($_POST['nombre'], $_POST['apellido'], $_POST['banco'], $_POST['numero_t']);
    //     header("location:?clase=tdebito&method=index");
    // }
 
    // public function delete()
    // {
    //     parent::delete_product($_GET['id']);
    //     header("location:?clase=productos&method=index");

    //     //require_once('views/productos/delete.php');
    // }
}