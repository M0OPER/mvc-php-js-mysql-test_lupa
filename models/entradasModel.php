<?php

@session_start();

require_once("../controllers/conexionController.php"); 

class EntradasModel{
  
  private $db;
  private $entradas;

  public function __CONSTRUCT(){
    $this->db=ConexionController::initial();
    $this->entradas = array();
  }

  public function listar_entradas(){
    $consulta=$this->db->query("SELECT * FROM entradas;");
    while($filas=$consulta->fetch_assoc()){
      $this->entradas[]=$filas;
    }
    return $this->entradas;
  }

  public function entradas_idUser($id){
    $consulta=$this->db->query("SELECT * FROM entradas WHERE ent_usuario_id = $id");
    while($filas=$consulta->fetch_assoc()){
      $this->entradas[]=$filas;
    }
    return $this->entradas;
  }

  public function registrar_entrada($titulo, $descripcion, $imagen, $autor, $id) {
    try {
      $consulta = $this->db->query("INSERT INTO entradas VALUES ('', '$titulo', '$imagen', '$descripcion', '', '$autor', $id)");
      if ($consulta) {
        return true;
      }else{
        return false;
      }
    } catch (\Throwable $th) {
      return $th;
    }
  }
  
}

?>
