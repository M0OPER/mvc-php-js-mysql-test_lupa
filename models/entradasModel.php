<?php

class EntradasModel{
  
  private $db;
  private $entradas;

  public function __CONSTRUCT(){
    $this->db=ConexionController::initial();
    $this->entradas = array();
  }

  public function listar_entradas(){
    $consulta=$this->db->query("select * from entradas;");
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
  
}

?>
