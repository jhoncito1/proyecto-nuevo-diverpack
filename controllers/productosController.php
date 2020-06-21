<?php
class productosController extends productos
{
    public function index()
    {
        //   header, navbar, sidebar-left
        require_once('views/layouts/admin/components/header.php');
        require_once('views/layouts/admin/components/navbar.php');
        require_once('views/layouts/admin/components/sidebar-left.php');
        
        // content
        require_once('views/productos/index.php');
        
        // sidebar-right, footer
        require_once("views/layouts/admin/components/sidebar-right.php"); 
        require_once("views/layouts/admin/components/footer.php"); 
    }

    public function insert()
    {
        require_once('views/productos/insert.php');
    }

    public function guardar()
    {
        parent::guardar_producto($_POST['nombre'], $_POST['descripcion'], $_POST['precio']);
        header("location:?clase=productos&method=index");
    }

    public function delete()
    {
        parent::delete_product($_GET['id']);
        header("location:?clase=productos&method=index");

        //require_once('views/productos/delete.php');
    }
}
 