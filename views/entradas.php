<?php 
require_once("../db/db.php"); 

$con = new Conexion();
$con->initial();

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Entradas</title>
  </head>
  <body>
    <?php 

    if (DEBUG_MODE) {
      // Activate PHP debugging
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
    } 

    require_once("../components/head.php"); require_once("../db/db.php"); require_once("../controllers/entradas_ctl.php"); ?>

<?php 

$con = new entradasController();
$con->index();

?>
    
    
    <?php require_once("../components/foot.php");  ?>
  </body>
</html>
