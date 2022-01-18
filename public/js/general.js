window.addEventListener("load", function () {
  var ajax = new XMLHttpRequest();

  if (document.getElementById("cerrarSesion")) {
    document
      .getElementById("cerrarSesion")
      .addEventListener("click", function () {
        ajax.open("POST", "../includes/front_controller.php", true);
        ajax.setRequestHeader(
          "Content-type",
          "application/x-www-form-urlencoded"
        );
        ajax.send("c=conexion&a=logout");
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
        ajax.open("POST", "../includes/front_controller.php", true);
        ajax.setRequestHeader(
          "Content-type",
          "application/x-www-form-urlencoded"
        );
        ajax.send("c=conexion&a=login");
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
});
