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
    @date_default_timezone_set('America/Bogota');
    @set_time_limit(60);
    @ini_set('max_execution_time', 60);
    @ini_set("session.cookie_lifetime","20000");
    @ini_set("session.gc_maxlifetime","20000");
    @session_start();
    return $conexion;
  }
}

?>
