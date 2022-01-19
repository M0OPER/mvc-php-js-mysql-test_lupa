<?php
//Llamada al modelo
@session_start();
require_once("../models/usuariosModel.php");

class UsuariosController{

	private $usuario;

	public function __CONSTRUCT(){
    $this->usuario = new UsuariosModel();
  }

  public function login(){ 
    $usuario    = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $password   = isset($_POST['password']) ? $_POST['password'] : '';
    if ($usuario == "" || $password == "") {
      return json_encode(array("res" => false, "men" => "Verifica que los campos no esten vacíos"));
    }else{
      $datos = $this->usuario->validar_datos($usuario, $password);
      if ($datos) {
        $_SESSION["status"] = "ON";
        return json_encode(array("res" => true, "men" => "Bienvenido al sistema"));
      }else{
        return json_encode(array("res" => false, "men" => "Usuario o contraseña incorrecta"));
      }
    }
  }

  public function registrar(){ 
    $usuario    = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $password   = isset($_POST['password']) ? $_POST['password'] : '';
    $nombres    = isset($_POST['nombres']) ? $_POST['nombres'] : '';
    $apellidos  = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
    $email      = isset($_POST['email']) ? $_POST['email'] : '';
    if ($nombres == '' || $apellidos == "" || $email == ""|| $usuario == "" || $password == "") {
      return json_encode(array("res" => false, "men" => "Verifica que los campos no esten vacíos"));
    }else{
      $datos = $this->usuario->registrar_usuario($usuario, $password, $nombres, $apellidos, $email);
      if ($datos) {
        return json_encode(array("res" => true, "men" => "Usuario registrado con exito"));
      }else{
        return json_encode(array("res" => false, "men" => "Usuario ya registrado"));
      }
    }
  }

}


?>