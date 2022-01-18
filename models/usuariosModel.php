<?php

require_once("../controllers/conexionController.php"); 

class UsuariosModel{
  
  private $db;
  private $usuarios;

  public function __CONSTRUCT(){
    $this->db=ConexionController::initial();
  }

  public function validar_datos($usuario, $password) {
    try {
      $consulta = $this->db->query("SELECT * FROM usuarios WHERE usu_usuario = '$usuario' AND usu_password = '$password'");
      $rs = $consulta->fetch_array();
      if ($consulta->num_rows > 0){
        $_SESSION["id"] = $rs['usu_id'];
        return true;
      } else {
        return false;
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

  public function registrar_usuario($usuario, $password, $nombres, $apellidos, $email) {
    try {
      $consulta = $this->db->query("INSERT INTO usuarios VALUES ('', '$usuario', '$password', '$nombres', '$apellidos','$email', 'ACTIVO')");
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

}


?>
