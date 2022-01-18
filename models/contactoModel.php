<?php

require_once("../controllers/conexionController.php"); 

class ContactoModel{
  
  private $db;
  private $contacto;

  public function __CONSTRUCT(){
    $this->db=ConexionController::initial();
  }

  public function registrar_contacto($nombres, $email, $mensaje) {
    try {
      $consulta = $this->db->query("INSERT INTO contacto VALUES ('', '$usuario', '$password', '$nombres', '$apellidos','$email', 'ACTIVO')");
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

}


?>
