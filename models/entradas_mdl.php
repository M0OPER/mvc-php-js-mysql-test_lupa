<?php

class entradas_model{
  
  private $db;
  private $entradas;

  public function __construct(){
    $this->db=Conectar::conexion();
    $this->entradas = array();
  }

  public function get_entradas(){
    $consulta=$this->db->query("select * from entradas;");
    while($filas=$consulta->fetch_assoc()){
      $this->entradas[]=$filas;
    }
    return $this->entradas;
  }


  
}

?>
