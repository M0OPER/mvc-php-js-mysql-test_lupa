<!-- Modal Iniciar Sesion-->

<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar sesion</h5>
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
            <label for="lblUser" class="form-label"
              >Usuario</label
            >
            <input
            name="user"
              type="text"
              class="form-control"
              id="lblUser"
              aria-describedby="emailHelp"
            />
          </div>
          <div class="mb-3">
            <label for="lblPass" class="form-label"
              >Password</label
            >
            <input
            name="pass"
              type="password"
              class="form-control"
              id="lblPass"
            />
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            REGISTRARSE
          </button>

          <button id="iniciarSesion" type="button" class="btn btn-primary">
            INGRESAR
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="../public/js/general.js"></script>