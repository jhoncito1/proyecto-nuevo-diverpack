<?php
session_start();
require_once('models/database/DB.php');
require_once('models/home.php');
require_once('models/usuarios.php');
require_once('models/productos.php');
require_once('models/roles.php');
require_once('models/pagos.php');
require_once('models/security.php');
require_once('models/tdocumento.php');
require_once('models/tcredito.php');
require_once('models/tdebito.php');



$controller = isset($_REQUEST['clase']) ? $_REQUEST['clase'] : 'security';
$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'login';
//  $controller=isset($_REQUEST['clase']) ? $_REQUEST['clase']: 'home';
//  $method=isset($_REQUEST['method']) ? $_REQUEST['method']: 'index';

// permite requerir un archivo .php en nuestro sitio
require_once('controllers/' . $controller . 'Controller.php');

$controller = $controller . 'Controller';
call_user_func(array($controller, $method));
   //$controller= new $controller();
   //$controller->$method();
