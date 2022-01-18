
<?php
  if ($datos) {
    foreach ($datos as $dato) {
      echo ('<div class="card">
      <div class="card-body">
        <h5 class="card-title">'.$dato["ent_titulo"].'</h5>
        <p class="card-text">'.$dato["ent_descripcion"].'</p>
        <img src="'.$dato["ent_imagen"].'" class="card-img-top" alt="...">
        Fecha y autor <a href="#" class="btn btn-primary">'.$dato["ent_fecha"]. ' - ' .$dato["ent_autor"].'</a>
      </div>
    </div>'); 
    } 
  }else{
    echo('<h6>Wops! No se encontraron entradas en la BBDD. Está vacia.</h6>');
  }
?>

