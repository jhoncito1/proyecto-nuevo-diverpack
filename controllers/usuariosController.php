<?php
class usuariosController extends usuarios
{
    public function index()
    {
        require_once('views/usuarios/index.php');
    }


    public function guardar()
    {
        parent::guardar_u(
            $_POST['documento'],
            $_POST['tipo'],
            $_POST['nombre1'],
            $_POST['nombre2'],
            $_POST['apellido1'],
            $_POST['apellido2'],
            $_POST['departamento'],
            $_POST['ciudad'],
            $_POST['direccion'],
            // $_POST['imagen'],
            $_POST['email'],

            $_POST['password'],
            $_POST['telefono'],
            $_POST['rol'],
            $_POST['estado']
        );
        header("location:?clase=usuarios&method=index");
    }

    // public function delete()
    // {
    //     parent::delete_r($_GET['id']);
    //     header("location:?clase=roles&method=index");
    // }

    // public function update()
    // {
    //     parent::update_r($_GET['nombre'], $_GET['descripcion']);
    //     header("location:?clase=roles&method=index");
    // }

    // public function details()
    // {
    //     $rol=parent::details_r($_REQUEST['id_rol']);
    //     // parent::details_r($_POST['id']);
    //     require_once('views/roles/details.php');
    // }
}
