(function () {
  "use strict";
  var regalo = document.getElementById("regalo");

  document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById("mapa")) {
      var map = L.map("mapa").setView([19.434133, -99.140899], 18);

      L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
          '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      }).addTo(map);

      L.marker([19.434133, -99.140899])
        .addTo(map)
        .bindPopup("GdlWebCamp 2018 boletos ya disponibles")
        .openPopup();
    }

    console.log("listo");
    //campos Usuario
    var nombre = document.getElementById("nombre");
    var apellido = document.getElementById("apellido");
    var email = document.getElementById("email");

    //Campos Pases
    var pase_dia = document.getElementById("pase_dia");
    var pase_completo = document.getElementById("pase_completo");
    var pase_dosdias = document.getElementById("pase_dosdias");

    //botones y divs
    var calcular = document.getElementById("calcular");
    var error_div = document.getElementById("error");
    var registro = document.getElementById("btn-registro");
    var lista_productos = document.getElementById("lista-productos");
    var suma_total = document.getElementById("suma-total");

    //extras
    var etiquetas = document.getElementById("etiquetas");
    var camisas = document.getElementById("camisa_evento");

    registro.disabled = true;
    const notifCalc = document.querySelector('.notif-calc');

    function notificacionCalcular(){
      console.log('cambio')
      if (registro.disabled == true){
        notifCalc.classList.remove('hidden');
      }else{
        notifCalc.classList.add('hidden')
      }
    }
    let observer =new MutationObserver(notificacionCalcular)
    let config = {attributes: true}
    observer.observe(registro,config);


    if (document.getElementById("calcular")) {
      calcular.addEventListener("click", calcularMontos);

      pase_dia.addEventListener("blur", mostrarDias);
      pase_dosdias.addEventListener("blur", mostrarDias);
      pase_completo.addEventListener("blur", mostrarDias);

      etiquetas.addEventListener('blur',disableReg)
      camisas.addEventListener('blur',disableReg)

      nombre.addEventListener("blur", validarCampos);
      apellido.addEventListener("blur", validarCampos);
      email.addEventListener("blur", validarCampos);
      email.addEventListener("blur", validarEmail);

      function validarCampos() {
        if (this.value == "") {
          error_div.style.display = "block";
          error_div.innerHTML = "Este campo es obligatorio";
          this.style.border = "1px solid red";
          error_div.style.border = "1px solid red";
          this.focus();
        } else {
          error.style.display = "none";
          this.style.border = "1px solid #cccccc";
        }
      }

      function validarEmail() {
        if (this.value.indexOf("@") > -1) {
          error.style.display = "none";
          this.style.border = "1px solid #cccccc";
        } else {
          error_div.style.display = "block";
          error_div.innerHTML = "Debe tener al menos 1 @";
          this.style.border = "1px solid red";
          error_div.style.border = "1px solid red";
          this.focus();
        }
      }

      function calcularMontos(event) {
        event.preventDefault();
        if (regalo.value === "") {
          alert("Debes elegir un regalo");
          regalo.focus();
        } else {
          var boletos_dia = parseInt(pase_dia.value, 10) || 0,
            boletos_dosdias = parseInt(pase_dosdias.value) || 0,
            boletos_completo = parseInt(pase_completo.value) || 0,
            cantidad_camisas = parseInt(camisas.value) || 0,
            cantidad_etiquetas = parseInt(etiquetas.value) || 0;

          var total_pagar =
            boletos_dia * 30 +
            boletos_dosdias * 45 +
            boletos_completo * 50 +
            cantidad_camisas * 10 * 0.93 +
            cantidad_etiquetas * 2;

          var listado_productos = [];

          if (boletos_dia >= 1) {
            listado_productos.push(boletos_dia + "Pases por dia");
          }
          if (boletos_dosdias >= 1) {
            listado_productos.push(boletos_dosdias + "Pases por dos dias");
          }
          if (boletos_completo >= 1) {
            listado_productos.push(boletos_completo + "Pases completos");
          }
          if (cantidad_camisas >= 1) {
            listado_productos.push(cantidad_camisas + "Camisas");
          }
          if (cantidad_etiquetas >= 1) {
            listado_productos.push(cantidad_etiquetas + "Etiquetas");
          }
          lista_productos.style.display = "block";
          lista_productos.innerHTML = "";
          for (var i = 0; i < listado_productos.length; i++) {
            lista_productos.innerHTML += listado_productos[i] + "<br>";
          }
          suma_total.innerHTML = "$" + total_pagar.toFixed(2);
          registro.disabled = false;
          document.getElementById("total_pedido").value = total_pagar;
        }
      }

      function mostrarDias() {
        var boletos_dia = parseInt(pase_dia.value, 10) || 0,
          boletos_dosdias = parseInt(pase_dosdias.value) || 0,
          boletos_completo = parseInt(pase_completo.value) || 0;
        var dias_elegidos = [];
        if (boletos_dia > 0) {
          dias_elegidos.push("viernes");
        }
        if (boletos_dosdias > 0) {
          dias_elegidos.push("viernes", "sabado");
        }
        if (boletos_completo > 0) {
          dias_elegidos.push("viernes", "sabado", "domingo");
        }
        for (var i = 0; i < dias_elegidos.length; i++) {
          document.getElementById(dias_elegidos[i]).style.display = "block";
        }
        registro.disabled = true;
      }
      function disableReg() {
        registro.disabled = true;
      }
    }
  }); //DOM CONTENT LOADED
})();

$(function () {
  //Programa de conferencias
  $(".programa-evento .info-curso:first").show();
  $("menu-programa a:first").addClass("activo");
  $(".menu-programa a").on("click", function () {
    $(".menu-programa a").removeClass("activo");
    $(this).addClass("activo");
    $(".ocultar").hide();
    var enlace = $(this).attr("href");
    $(enlace).fadeIn(1000);
    return false;
  });
  //Menu fijo
  let barraAltura = $(".barra").innerHeight();
  let windowHeight = $(window).height();
  $(window).scroll(function () {
    let scroll = $(window).scrollTop();
    if (scroll > windowHeight) {
      $(".barra").addClass("fixed");
      $("body").css({ "margin-top": barraAltura + "px" });
    } else {
      $(".barra").removeClass("fixed");
      $("body").css({ "margin-top": "0px" });
    }
  });
  //Menu responsive
  $(".menu-movil").on("click", function () {
    $(".navegacion-principal").slideToggle();
  });
  //Agregar activo a la pagina donde se encuentra el usuario
  $("#conferencia .navegacion-principal a:contains('Conferencia')").addClass(
    "activo"
  );
  $("#calendario .navegacion-principal a:contains('Calendario')").addClass(
    "activo"
  );
  $("#invitados .navegacion-principal a:contains('Invitados')").addClass(
    "activo"
  );
  // Animaciones para los numeros
  $(".resumen-evento li:nth-child(1) p").animateNumber({ number: 6 }, 1200);
  $(".resumen-evento li:nth-child(2) p").animateNumber({ number: 15 }, 1200);
  $(".resumen-evento li:nth-child(3) p").animateNumber({ number: 3 }, 1200);
  $(".resumen-evento li:nth-child(4) p").animateNumber({ number: 9 }, 1200);
  //Cuenta regresiva para el evento
  $(".cuenta-regresiva").countdown("2021/12/14 12:12:12", function (event) {
    $("#dias").html(event.strftime("%D"));
    $("#horas").html(event.strftime("%H"));
    $("#minutos").html(event.strftime("%M"));
    $("#segundos").html(event.strftime("%S"));
  });
  //colorbox
  $(".invitado-info").colorbox({ inline: true, width: "50%" });
});
