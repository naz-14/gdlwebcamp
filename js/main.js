(function(){

    "use strict";
    var regalo= document.getElementById('regalo');

    document.addEventListener("DOMContentLoaded",function(){

        if(document.getElementById('mapa')){

            var map = L.map('mapa').setView([19.434133, -99.140899], 18);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
    
            L.marker([19.434133, -99.140899]).addTo(map)
            .bindPopup('GdlWebCamp 2018 boletos ya disponibles')
            .openPopup();

        }
        


        console.log("listo");
        //campos Usuario
        var nombre= document.getElementById('nombre');
        var apellido= document.getElementById('apellido');
        var email= document.getElementById('email');


        //Campos Pases
        var pase_dia=document.getElementById('pase_dia');
        var pase_completo=document.getElementById('pase_completo');
        var pase_dosdias=document.getElementById('pase_dosdias');

        //botones y divs
        var calcular= document.getElementById('calcular');
        var error_div= document.getElementById('error');
        var registro= document.getElementById('btn-registro');
        var lista_productos= document.getElementById('lista-productos');
        var suma_total=document.getElementById('suma-total');

        //extras
        var etiquetas=document.getElementById('etiquetas');
        var camisas=document.getElementById('camisa_evento');


        if (document.getElementById('calcular')) {
            calcular.addEventListener("click", calcularMontos);

            pase_dia.addEventListener('blur',mostrarDias);
            pase_dosdias.addEventListener('blur',mostrarDias);
            pase_completo.addEventListener('blur',mostrarDias);
    
            nombre.addEventListener('blur',validarCampos);
            apellido.addEventListener('blur',validarCampos);
            email.addEventListener('blur',validarCampos);
            email.addEventListener('blur',validarEmail);
    
            function validarCampos(){
                if(this.value==''){
                    error_div.style.display='block';
                    error_div.innerHTML="Este campo es obligatorio";
                    this.style.border="1px solid red";
                    error_div.style.border="1px solid red";
                    this.focus();
                }
                else{
                    error.style.display="none";
                    this.style.border="1px solid #cccccc"
                }
            }
    
            function validarEmail(){
                if(this.value.indexOf("@")>-1){
                    error.style.display="none";
                    this.style.border="1px solid #cccccc"
                }
                else{
                    error_div.style.display='block';
                    error_div.innerHTML="Debe tener al menos 1 @";
                    this.style.border="1px solid red";
                    error_div.style.border="1px solid red";
                    this.focus();
                }
            }
    
    
            function calcularMontos(event){
                event.preventDefault();
                if (regalo.value===''){
                    alert("Debes elegir un regalo");
                    regalo.focus();
                } else{
                    var boletos_dia=parseInt(pase_dia.value,10)||0,
                    boletos_dosdias=parseInt(pase_dosdias.value)||0,
                    boletos_completo=parseInt(pase_completo.value)||0,
                    cantidad_camisas=parseInt(camisas.value)||0,
                    cantidad_etiquetas=parseInt(etiquetas.value)||0;
    
                    var total_pagar =(boletos_dia*30)+(boletos_dosdias*45)+(boletos_completo*50)+((cantidad_camisas*10)*.93)+(cantidad_etiquetas);
                   
                    var listado_productos= [];
    
                    if(boletos_dia>=1){
                        listado_productos.push(boletos_dia+'Pases por dia');
                    }
                    if(boletos_dosdias>=1){
                        listado_productos.push(boletos_dosdias+'Pases por dos dias');
                    }
                    if(boletos_completo>=1){
                        listado_productos.push(boletos_completo+'Pases completos');
                    }
                    if(cantidad_camisas>=1){
                        listado_productos.push(cantidad_camisas+'Camisas');
                    }
                    if(cantidad_etiquetas>=1){
                        listado_productos.push(cantidad_etiquetas+'Etiquetas');
                    }
                    lista_productos.style.display='block'
                    lista_productos.innerHTML= '';
                    for(var i=0; i<listado_productos.length;i++){
                        lista_productos.innerHTML+=listado_productos[i]+'<br>'
                    }
                    suma_total.innerHTML="$"+total_pagar.toFixed(2);
                }
            }
    
            function mostrarDias(){
                var boletos_dia=parseInt(pase_dia.value,10)||0,
                    boletos_dosdias=parseInt(pase_dosdias.value)||0,
                    boletos_completo=parseInt(pase_completo.value)||0;
                var dias_elegidos=[];
                if(boletos_dia>0){
                    dias_elegidos.push('viernes');
                }
                if(boletos_dosdias>0){
                    dias_elegidos.push('viernes','sabado');
                }
                if(boletos_completo>0){
                    dias_elegidos.push('viernes','sabado','domingo');
                }
                for(var i=0;i<dias_elegidos.length;i++){
                    document.getElementById(dias_elegidos[i]).style.display='block';
                }
            } 
        }


    });//DOM CONTENT LOADED

})();


$(function(){

    //Programa de conferencias
    
    $('.programa-evento .info-curso:first').show();
    $('menu-programa a:first').addClass('activo');
    $('.menu-programa a').on('click',function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        var enlace =$(this).attr('href');
        $(enlace).fadeIn(1000);




        return false;
    });
})