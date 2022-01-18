<?php

require_once("../controllers/conexionController.php"); 

class ContactoModel{
  
  private $db;
  private $contacto;

  public function __CONSTRUCT(){
    $this->db=ConexionController::initial();
  }

  public function registrar_contacto($nombres, $email, $mensaje) {
    try {
      $email_to = "godred12994@gmail.com";
      $email_subject = "Contacto desde el sitio web";
      $consulta = $this->db->query("INSERT INTO contacto VALUES ('', '$nombres', '$email', '$mensaje')");
      if ($consulta) {

        // Settings
        ini_set("SMTP", "aspmx.l.google.com");
        ini_set("sendmail_from", "godred12994@gmail.com");
        $message = "The mail message was sent";

        $headers = "From: godred12994@gmail.com";

        mail($email, "Testing", $message, $headers);

        return true;
      }else{
        return false;
      }
    } catch (\Throwable $th) {
      //throw $th;
    }
  }

}


?>
