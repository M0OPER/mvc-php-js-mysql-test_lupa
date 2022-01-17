<?php
//Llamada al modelo
require_once("models/blogs_mdl.php");
$per=new personas_model();
$datos=$per->get_personas();
 
//Llamada a la vista
//require_once("views/personas_view.html");
?>
