<?php
class tcreditoController extends tcredito
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
        require_once('views/tcredito/index.php');
        /*
        sidebar-right, footer
        */
        require_once("views/layouts/admin/components/sidebar-right.php");
        require_once("views/layouts/admin/components/footer.php");

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