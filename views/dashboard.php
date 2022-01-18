
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
  <style>
    #btnNewEntry{
      position: fixed;
      right: 2%;
      bottom: 10%;
    }
  </style>
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

<div align="left"><button data-bs-toggle="modal" data-bs-target="#modalNuevaEntrada" id="btnNewEntry" type="button" class="btn btn-primary btn-lg">NUEVA ENTRADA</button></div>

<!-- Modal Nueva Entrada-->

<div
  class="modal fade"
  id="modalNuevaEntrada"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva entrada</h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <form>
        <div class="modal-body">

          <div class="mb-3">
            <label for="titulo" class="form-label"
              >Titulo</label
            >
            <input
              type="text"
              class="form-control"
              id="titulo"
              aria-describedby="emailHelp"
            />
          </div>

          <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea class="form-control" id="descripcion" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="imagen" class="form-label"
              >Portada</label
            >
            <input
              type="file"
              accept="image/*"
              class="form-control"
              id="imagen"
            />
          </div>

          <div class="mb-3">
            <label for="autor" class="form-label"
              >Autor</label
            >
            <input
              type="text"
              class="form-control"
              id="autor"
            />
          </div>

        </div>
        <div class="modal-footer">

          <button id="registrarEntrada" type="button" class="btn btn-primary">
            CREAR ENTRADA
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
    
    <?php require_once("../components/foot.php");  ?>
    <script src="../public/js/entradas.js"></script>
  </body>
</html>