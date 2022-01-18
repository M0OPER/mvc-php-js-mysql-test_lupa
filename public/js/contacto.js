window.addEventListener("load", function () {
  var ajax = new XMLHttpRequest();

  if (document.getElementById("registrarContacto")) {
    document
      .getElementById("registrarContacto")
      .addEventListener("click", function () {
        var formData = new FormData();
        var nombre = document.getElementById("nombre").value;
        var email = document.getElementById("email").value;
        var mensaje = document.getElementById("mensaje").value;
        formData.append("c", "contacto");
        formData.append("a", "registrar");
        formData.append("nombre", nombre);
        formData.append("email", email);
        formData.append("mensaje", mensaje);
        ajax.open("POST", "../includes/front_controller.php", true);
        ajax.send(formData);
        ajax.onload = function () {
          if (ajax.readyState === ajax.DONE) {
            if (ajax.status === 200) {
              res = JSON.parse(this.response);
              if (res.res == true) {
                window.alert(res.men);
                location.reload();
              } else {
                window.alert(res.men);
              }
            } else {
              console.log(res.men);
            }
          }
        };
      });
  }
});
