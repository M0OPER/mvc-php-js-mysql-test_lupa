<?php

class Conectar{
  public static function conexion(){
    $conexion=new mysqli("localhost", "root", "usbw", "lupa_juridica");
    $conexion->query("SET NAMES 'utf8'");
    if ($conexion->connect_error) {
      die('<div class="" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <strong class="me-auto text-danger">SERVER ERROR</strong>
      </div>
      <div class="toast-body">
        No se ha podido conectar a la base de datos.
      </div>
    </div>');
    }
    return $conexion;
  }
}

?>
