<?php 

$controller = strtolower($_POST['c']);
$accion = isset($_POST['a']) ? $_POST['a'] : 'index';

// Instanciamos el controlador
require_once "../controllers/". $controller ."Controller.php";
$controller = ucwords($controller) . 'Controller';
$controller = new $controller;

$msg = call_user_func( array( $controller, $accion ) );

echo $msg;


?>