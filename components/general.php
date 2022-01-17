<!-- Modal Iniciar Sesion-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">REGISTRARSE</button>
        <form action="<?=URL?>db/initial" method="POST"><button name="submit" type="submit" class="btn btn-primary">INGRESAR</button></form>
        
      </div>
    </div>
  </div>
</div>