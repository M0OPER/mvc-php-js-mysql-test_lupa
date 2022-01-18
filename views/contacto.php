<?php 
require_once("../controllers/conexionController.php"); 

$con = new ConexionController();
$con->initial();

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Contacto</title>
  </head>
  <body>
    <?php 

    if (DEBUG_MODE) {
      // Activate PHP debugging
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
    } 

    // Settings
    ini_set("SMTP", "aspmx.l.google.com");
    ini_set("sendmail_from", "godred12994@gmail.com");
    $message = "The mail message was sent";

    $headers = "From: godred12994@gmail.com";

    //mail("edwinrafaelmontesmeza@gmail.com", "Testing", $message, $headers);

    require_once("../components/head.php"); ?>

<div class="" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header shadow">CONTACTO</div>
          <div class="modal-body">
            <form>

              <div class="mb-3 row">
                <label for="nombres" class="col-sm-2 col-form-label"
                  >Nombres</label
                >
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control-plaintext shadow"
                    id="nombres"
                  />
                </div>
              </div>

              <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label"
                  >Email</label
                >
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control-plaintext shadow"
                    id="email"
                  />
                </div>
              </div>

              <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control shadow" id="mensaje" rows="3"></textarea>
          </div>

            </form>
          </div>
          <div class="modal-footer modalFoot" align="center">
            <button id="registrarContacto" type="" class="btn btn-success">
              ENVIAR DATOS
            </button>
          </div>
        </div>
      </div>
    </div>    
    
    <?php require_once("../components/foot.php");  ?>
    <script src="../public/js/contacto.js"></script>
  </body>
</html>