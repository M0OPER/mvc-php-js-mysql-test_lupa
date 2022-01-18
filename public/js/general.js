window.addEventListener("load", function () {
  var ajax = new XMLHttpRequest();

  if (document.getElementById("cerrarSesion")) {
    document
      .getElementById("cerrarSesion")
      .addEventListener("click", function () {
        var formData = new FormData();
        formData.append("c", "conexion");
        formData.append("a", "logout");
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
                console.log(res.men);
              }
            } else {
              console.log(res.men);
            }
          }
        };
      });
  }

  if (document.getElementById("iniciarSesion")) {
    document
      .getElementById("iniciarSesion")
      .addEventListener("click", function () {
        var formData = new FormData();
        formData.append("c", "usuarios");
        formData.append("a", "login");
        var usuario = document.getElementById("loginUsuario").value;
        var password = document.getElementById("loginPassword").value;
        formData.append("usuario", usuario);
        formData.append("password", password);
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
                console.log(res.men);
              }
            } else {
              console.log(res.men);
            }
          }
        };
      });
  }

  if (document.getElementById("registrarUsuario")) {
    document
      .getElementById("registrarUsuario")
      .addEventListener("click", function () {
        var formData = new FormData();
        var nombres = document.getElementById("nombres").value;
        var apellidos = document.getElementById("apellidos").value;
        var email = document.getElementById("email").value;
        var usuario = document.getElementById("usuario").value;
        var password = document.getElementById("password").value;
        formData.append("c", "usuarios");
        formData.append("a", "registrar");
        formData.append("usuario", usuario);
        formData.append("password", password);
        formData.append("nombres", nombres);
        formData.append("apellidos", apellidos);
        formData.append("email", email);
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
