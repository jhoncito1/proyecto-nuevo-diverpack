<?php
class adminController{
    public function index()
    {
        
        security::validate();
        /*
          header, navbar, sidebar-left
        */
        require_once('views/layouts/admin/components/header.php');
        require_once('views/layouts/admin/components/navbar.php');
        require_once('views/layouts/admin/components/sidebar-left.php');
        /*
        content
        */
        require_once('views/admin/index.php');
        /*
        sidebar-right, footer
        */
        require_once("views/layouts/admin/components/sidebar-right.php"); 
        require_once("views/layouts/admin/components/footer.php"); 
        
    }
    public function plantilla()
    {
        require_once('views/admin/plantilla.php');
    }

    public function index2()
    {
        require_once('views/admin/index2.php');
    }
}
?>