<?php 
require_once("../controllers/conexionController.php"); 

$con = new ConexionController();
$con->initial(); ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>REGISTRO</title>
  </head>
  <body>
    <?php 

    if (DEBUG_MODE) {
      // Activate PHP debugging
      ini_set('display_errors', 'On');
      error_reporting(E_ALL);
    } 

    require_once("../components/head.php"); ?>

    <div class="" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header shadow">REGISTRO AL SISTEMA</div>
          <div class="modal-body">
            <form>

              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label"
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
                <label for="staticEmail" class="col-sm-2 col-form-label"
                  >Apellidos</label
                >
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control-plaintext shadow"
                    id="apellidos"
                  />
                </div>
              </div>

              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label"
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

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Usuario</label
                >
                <div class="col-sm-10">
                  <input
                    type="text"
                    class="form-control shadow"
                    id="usuario"
                  />
                </div>
              </div>

              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"
                  >Password</label
                >
                <div class="col-sm-10">
                  <input
                    type="password"
                    class="form-control shadow"
                    id="password"
                  />
                </div>
              </div>

            </form>
          </div>
          <div class="modal-footer modalFoot" align="center">
            <button id="registrarUsuario" type="" class="btn btn-success">
              REGISTRAR
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php require_once("../components/foot.php");  ?>
  </body>
</html>
