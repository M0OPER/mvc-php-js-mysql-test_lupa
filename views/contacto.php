<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>CONTACTO</title>
  </head>
  <body>
    <?php 

    if (DEBUG_MODE) {
      // Activate PHP debugging
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
    } 

    require_once("../components/head.php"); require_once("../db/db.php"); ?>
    
    <h1>CONTACTO</h1>
    <?php require_once("../components/foot.php");  ?>
  </body>
</html>