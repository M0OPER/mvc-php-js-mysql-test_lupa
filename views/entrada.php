<?php 
require_once("../controllers/conexionController.php"); 

$con = new ConexionController();
$con->initial();

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Detalles entrada</title>
  </head>
  <body>
    <?php 

    if (DEBUG_MODE) {
      // Activate PHP debugging
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
    }

    require_once("../components/head.php"); require_once("../controllers/entradasController.php"); ?>
    <h3>DETALLES DE LA ENTRADA</h3>
    <hr>

<div class="" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
          <?php 

$con = new EntradasController();
$con->entradaId($_GET["id"]);

?> 
          </div>
          <div class="modal-footer modalFoot" align="center">
          </div>
        </div>
      </div>
    </div>    
    
    <?php require_once("../components/foot.php");  ?>
    <script src="../public/js/contacto.js"></script>
  </body>
</html>