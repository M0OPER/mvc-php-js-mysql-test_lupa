<?php
//Llamada al modelo
require_once("../models/entradasModel.php");

class EntradasController{

	private $entrada;

	public function __CONSTRUCT(){
    $this->entrada = new EntradasModel();
  }

  public function todas(){ // En este caso index va a mostrar todas las entradas
    $datos = $this->entrada->listar_entradas();
    require_once("../components/entradas_todas.php");
  }

  public function userId($id){ // En este caso index va a mostrar todas las entradas
    $datos = $this->entrada->entradas_idUser($id);
    require_once("../components/entradas_usuario.php");
  }

}


?>
