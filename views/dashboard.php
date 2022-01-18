
<?php 
require_once("../controllers/conexionController.php"); 

$con = new ConexionController();
$con->initial();

?>

<?php 
if($_SESSION["status"] == "OFF"){header("Location: ../views/home.php");;
  die();
  } 
  
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
  </head>
  <body>
    <?php 

    if (DEBUG_MODE) {
      // Activate PHP debugging
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
    } 

    require_once("../components/head.php"); require_once("../controllers/entradasController.php"); ?>

    <h3>MIS ENTRADAS</h3>
    <hr>

<?php 

$con = new EntradasController();
$con->userId($_SESSION["id"]);

?>   
    
    <?php require_once("../components/foot.php");  ?>
  </body>
</html>