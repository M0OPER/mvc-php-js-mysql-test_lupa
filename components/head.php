
<?php if(!$_SESSION["status"] == "OFF"){echo "Primero necesita logearse<a href='../inicio/'><button>Regresar al inicio</button></a>";
  //die();
  } ?>
  
<?php 

if (isset($_POST['iniciarSesion'])) {
  echo("working");
}

echo("HEAD->".$_SESSION["status"]);

echo('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">');
echo('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>');
include_once("general.php");

echo('<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="#">INNO BLOGS</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../views/home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../views/entradas.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../views/contacto.php">Contacto</a>
      </li>
    </ul>
    <form class="d-flex">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        CUENTA
      </a>');

      if ($_SESSION["status"] == "OFF") {
        echo('<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar sesion</a></li>
        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrarse</a></li>
        
      </ul>');
      }else{
        echo('<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="#">Mis entradas</a></li>
        <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
      </ul>');
      }


      
echo('</li>
  </ul>
    </form>
  </div>
</div>
</nav>');

?>