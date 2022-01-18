<?php

class entradasModel{
  
  private $db;
  private $entradas;

  public function __CONSTRUCT(){
    $this->db=Conexion::initial();
    $this->entradas = array();
  }

  public function listar_entradas(){
    $consulta=$this->db->query("select * from entradas;");
    while($filas=$consulta->fetch_assoc()){
      $this->entradas[]=$filas;
    }
    return $this->entradas;
  }


  
}

?>
