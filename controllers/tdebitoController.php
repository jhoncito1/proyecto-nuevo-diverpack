<?php
class tdebitoController extends tdebito
{
    public function index()
    {

        /*
         header, navbar, sidebar-left
       */
        require_once('views/layouts/admin/components/header.php');
        require_once('views/layouts/admin/components/navbar.php');
        require_once('views/layouts/admin/components/sidebar-left.php');
        /*
        content
        */
        require_once('views/tdebito/index.php');
        /*
        sidebar-right, footer
        */
        require_once("views/layouts/admin/components/sidebar-right.php");
        require_once("views/layouts/admin/components/footer.php");
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