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

  public function registrar(){ 
    $titulo      = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $imagen      = isset($_FILES['imagen']) ? $_FILES['imagen'] : '';
    $autor       = isset($_POST['autor']) ? $_POST['autor'] : '';
    $uploadDir    = '../uploads/';
    $filesInput   = $_FILES['imagen'];
    $filesName    = $filesInput['name'];
    $filesTmpName = $filesInput['tmp_name'];
    $filesError   = $filesInput['error'];
    if ($titulo == '' || $descripcion == "" || $autor == "") {
      return json_encode(array("res" => false, "men" => "Verifica que los campos no esten vacíos"));
    }else{
      if ($filesError == \UPLOAD_ERR_OK) {
        $toPath = $uploadDir . uniqid() . '_' . $name .'.jpg';
        $uploaded = move_uploaded_file($filesTmpName, $toPath);
        $datos = $this->entrada->registrar_entrada($titulo, $descripcion, $toPath, $autor, $_SESSION["id"]);
        if ($datos) {
          return json_encode(array("res" => true, "men" => "Entrada registrado con exito"));
        }else{
          return json_encode(array("res" => false, "men" => "Error al crear la entrada"));
        }
      }else{
        return json_encode(array("res" => false, "men" => "Error al guardar imagen"));
      }
    }
  }

}


?>
