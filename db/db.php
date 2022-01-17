<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("localhost", "root", "", "lupa_juridica");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
