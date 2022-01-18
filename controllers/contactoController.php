<?php
//Llamada al modelo
@session_start();
require_once("../models/contactoModel.php");

class ContactoController{

	private $contacto;

	public function __CONSTRUCT(){
    $this->contacto = new ContactoModel();
  }

  public function registrar(){ 
    $nombres    = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email      = isset($_POST['email']) ? $_POST['email'] : '';
    $mensaje    = isset($_POST['mensaje']) ? $_POST['mensaje'] : '';
    if ($nombres == '' || $email == ""|| $mensaje == "") {
      return json_encode(array("res" => true, "men" => "Verifica que los campos no esten vacíos"));
    }else{
      $datos = $this->contacto->registrar_contacto($nombres, $email, $mensaje);
      if ($datos) {
        return json_encode(array("res" => true, "men" => "Datos registrados con exito"));
      }else{
        return json_encode(array("res" => false, "men" => "Server error"));
      }
    }
  }

}


?>