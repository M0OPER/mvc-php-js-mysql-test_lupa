<h2>ENTRADAS</h2>
<?php
  if ($datos) {
    foreach ($datos as $dato) {
      echo $dato["ent_titulo"]; 
    } 
  }else{
    echo('<h6>Wops! No se encontraron entradas en la BBDD. Está vacia.</h6>');
  }
?>