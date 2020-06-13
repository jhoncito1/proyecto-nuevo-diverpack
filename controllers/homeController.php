<?php
class homeController extends home{
    public function index(){
        require_once ('views/home/index.php');
    }
   /*
    * formulario
    *  crear nuevo usuario
    */
    public function menu(){
        require_once ('views/home/menu.php');
    }
    public function create(){
        require_once ('views/home/create.php');
    }
    public function quiensomos(){
        require_once ('views/home/quiensomos.php');
    }
    public function contacto(){
        require_once ('views/home/contacto.php');
    }
    public function acercade(){
        require_once ('views/home/acercade.php');
    }
    public function home(){
        require_once ('views/home/acercade.php');
    }
    public function servicios(){
        require_once ('views/home/servicios.php');
    }
    public function nuestraempresa(){
        require_once ('views/home/nuestraempresa.php');
    }

}

?>