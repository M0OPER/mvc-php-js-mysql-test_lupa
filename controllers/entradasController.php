<?php
//Llamada al modelo
require_once("../models/entradas_mdl.php");

class EntradasController{

	private $entrada;

	public function __CONSTRUCT(){
    $this->entrada = new entradasModel();
  }

  public function index(){ // En este caso index va a mostrar todas entradas
    $datos = $this->entrada->listar_entradas();
    require_once("../components/listar_entradas.php");
  }
}


?>
