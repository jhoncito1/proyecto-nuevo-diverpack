<?php
class pagosController extends pagos
{
    public function index()
    {
        //   header, navbar, sidebar-left
        require_once('views/layouts/admin/components/header.php');
        require_once('views/layouts/admin/components/navbar.php');
        require_once('views/layouts/admin/components/sidebar-left.php');
        
        // content
        require_once('views/pagos/index.php');
                
        // sidebar-right, footer
        require_once("views/layouts/admin/components/sidebar-right.php"); 
        require_once("views/layouts/admin/components/footer.php"); 
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