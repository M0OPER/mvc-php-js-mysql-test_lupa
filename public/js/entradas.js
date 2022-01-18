window.addEventListener("load", function () {
  var ajax = new XMLHttpRequest();

  if (document.getElementById("registrarEntrada")) {
    document
      .getElementById("registrarEntrada")
      .addEventListener("click", function () {
        var formData = new FormData();
        var titulo = document.getElementById("titulo").value;
        var descripcion = document.getElementById("descripcion").value;
        var imagen = document.getElementById("imagen").files[0];
        var autor = document.getElementById("autor").value;
        formData.append("c", "entradas");
        formData.append("a", "registrar");
        formData.append("titulo", titulo);
        formData.append("descripcion", descripcion);
        formData.append("imagen", imagen);
        formData.append("autor", autor);
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
