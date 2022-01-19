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

  public function entradas_idEntrada($id){
    $consulta=$this->db->query("SELECT * FROM entradas WHERE ent_id = $id");
    while($filas=$consulta->fetch_assoc()){
      $this->entradas[]=$filas;
    }
    return $this->entradas;
  }

  public function registrar_entrada($titulo, $descripcion, $imagen, $autor, $id) {
    try {
      $fecha = date("Y-m-d H:i:s");
      $consulta = $this->db->query("INSERT INTO entradas VALUES ('', '$titulo', '$imagen', '$descripcion', '$fecha', '$autor', $id)");
      if ($consulta) {
        return true;
      }else{
        return false;
      }
    } catch (\Throwable $th) {
      return $th;
    }
  }

  public function eliminar_entrada($id, $id_user) {
    try {
      $consulta = $this->db->query("DELETE FROM entradas WHERE ent_id = $id AND ent_usuario_id = $id_user");
      if ($consulta) {
        return true;
      }else{
        return false;
      }
    } catch (\Throwable $th) {
      return $th;
    }
  }

  public function cargar_entrada($id, $id_user) {
    try {
      $consulta=$this->db->query("SELECT * FROM entradas WHERE ent_id = $id AND ent_usuario_id = $id_user");
      while($filas=$consulta->fetch_assoc()){
        $this->entradas[]=$filas;
      }
      return $this->entradas;
    } catch (\Throwable $th) {
      return $th;
    }
  }

  public function editar_textos($titulo, $descripcion, $autor, $id, $id_user) {
    try {
      $consulta=$this->db->query("UPDATE entradas SET ent_titulo = '$titulo', ent_descripcion = '$descripcion' WHERE ent_id = $id AND ent_usuario_id = $id_user");
      if ($consulta) {
        return true;
      }else{
        return false;
      }
    } catch (\Throwable $th) {
      return $th;
    }
  }

  public function editar_todo($titulo, $descripcion, $imagen, $autor, $id, $id_user) {
    try {
      $consulta=$this->db->query("SELECT * FROM entradas WHERE ent_id = $id AND ent_usuario_id = $id_user");
      while($filas=$consulta->fetch_assoc()){
        $this->entradas[]=$filas;
      }
      return $this->entradas;
    } catch (\Throwable $th) {
      return $th;
    }
  }
  
}

?>
