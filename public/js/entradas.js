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

  if (document.getElementById("editarEntrada")) {
    document
      .getElementById("editarEntrada")
      .addEventListener("click", function () {
        var id = this.getAttribute("id_entrada");
        var formData = new FormData();
        var titulo = document.getElementById("editarTitulo").value;
        var descripcion = document.getElementById("editarDescripcion").value;
        var imagen = document.getElementById("editarImagen").files[0];
        var autor = document.getElementById("editarAutor").value;
        formData.append("c", "entradas");
        formData.append("a", "editar");
        formData.append("id", id);
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

  if (document.getElementsByClassName("eliminar")) {
    for (let el of document.getElementsByClassName("eliminar")) {
      el.addEventListener("click", clic);
    }

    function clic(event) {
      var formData = new FormData();
      var id = this.getAttribute("id");
      formData.append("c", "entradas");
      formData.append("a", "eliminar");
      formData.append("id", id);
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
    }
  }

  if (document.getElementsByClassName("editar")) {
    for (let el of document.getElementsByClassName("editar")) {
      el.addEventListener("click", clic);
    }

    function clic(event) {
      var formData = new FormData();
      var id = this.getAttribute("id");
      formData.append("c", "entradas");
      formData.append("a", "cargar");
      formData.append("id", id);
      ajax.open("POST", "../includes/front_controller.php", true);
      ajax.send(formData);
      ajax.onload = function () {
        if (ajax.readyState === ajax.DONE) {
          if (ajax.status === 200) {
            res = JSON.parse(this.response);
            if (res.res == true) {
              $("#modalEditarEntrada").modal("show");
              document.getElementById("editarTitulo").value = res.data[0].ent_titulo;
              document.getElementById("editarDescripcion").value = res.data[0].ent_descripcion;
              document.getElementById("editarAutor").value = res.data[0].ent_autor;
              document.getElementById("editarEntrada").setAttribute("id_entrada", id);
              console.log(res.data[0]);
            } else {
              window.alert(res.men);
            }
          } else {
            console.log(res.men);
          }
        }
      };
      
    }
  }
});
