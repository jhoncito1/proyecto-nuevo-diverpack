<?php
class securityController extends security
{
    public function login()
    {
        require_once('views/security/login.php');
    }

    public function auth_user()
    {
        $usuario=usuarios::get_email($_POST['email']);
        if (!$usuario) {
            header("location:?clase=security&method=login");
        }
        if ($usuario->password==$_POST['password']) {
            
            $_SESSION['USER']=$usuario;
            header("location:?clase=usuarios&method=index");
        }
        else {
            header("location:?clase=security&method=login");
        }
        var_dump($usuario);
    }
}
