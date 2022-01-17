<?php
//Llamada al modelo
require_once("models/entradas_mdl.php");
$per=new entradas_model();
$datos=$per->get_entradas();
 
//Llamada a la vista
require_once("views/entradas.php");
?>
