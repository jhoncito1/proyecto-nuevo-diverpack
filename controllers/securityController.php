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
            header("location:?clase=admin&method=index");

        }
        else {
            header("location:?clase=security&method=login");
        }
        var_dump($usuario);
    }
    public function destroy(){
        unset($_SESSION['USER']);
        session_destroy();
        header("location:?clase=security&method=login");

    }
}
