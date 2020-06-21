<?php
class rolesController extends roles
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
        require_once('views/roles/index.php');
        /*
        sidebar-right, footer
        */
        require_once("views/layouts/admin/components/sidebar-right.php"); 
        require_once("views/layouts/admin/components/footer.php"); 
    }


    public function guardar()
    {
        parent::guardar_r($_POST['nombre'], $_POST['descripcion']);
        header("location:?clase=roles&method=index");
    }

    public function delete()
    {
        parent::delete_r($_GET['id']);
        header("location:?clase=roles&method=index");
    }

    public function update()
    {
        parent::update_r($_GET['nombre'], $_GET['descripcion']);
        header("location:?clase=roles&method=index");
    }

    public function details()
    {
  
        $rol=parent::details_r($_REQUEST['id_user']);
        
        // parent::details_r($_POST['id']);
        require_once('views/roles/details.php');
    }
}