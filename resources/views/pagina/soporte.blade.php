@extends('layouts.master')

@section('content')
<!-- Page Title
  ============================================= -->
  <section style="margin-top: 30px" id="page-title" class="page-title-pattern soporteprincipal">

    <div class="container clearfix" >
      <h1>¿Tienes alguna pregunta?</h1>
      <form class="form-inline " style="margin-left: 25rem; margin-top: 2rem">
        <button style="background-color: #ffffff" class="btn btn-outline-success " type="submit"><i class="icon-search3"></i></button>
        <input style="width: 60rem" class="form-control " type="search" placeholder="Buscar en la preguntas..." aria-label="Buscar en las preguntas...">
      </form>
      {{-- <div class="input-group" style="margin-left: 25rem; margin-top: 2rem">
          <input style="width: 60rem" class="form-control " type="search" placeholder="Buscar en la preguntas..." aria-label="Buscar en las preguntas...">
          <button style="background-color: #ffffff" class="btn btn-outline-success " type="submit"><i class="icon-search3"></i></button>
      </div> --}}
    </div>

  </section><!-- #page-title end -->

  <div class="row" style="margin: 30px">
    <div class="col-md-12">
      <table>
        <div class="col-md-12" style="border: 2px rgb(161, 158, 158) solid; border-radius: 10px; align-content: center">
          <div class="accordion-container">
            <a href="#" class="accordion-titulo">Activación<span class="toggle-icon"></span></a>
            <div class="accordion-content" id="activacion">
              <ul style="list-style: none">
                <li>Inserta tu SIM Altcel dentro del equipo según tamaño</li>
                <li>Enciende tu equipo</li>
                <li>Te llegará un mensaje de texto con tu nuevo número Altcel</li>
                <li>Realiza una primera recarga para que con esto tu servicio quede activo y listo para su uso.</li>
              </ul>
            </div>
          </div>
  
          <div class="accordion-container">
            <a href="#" class="accordion-titulo">Configuración de internet Android<span class="toggle-icon"></span></a>
            <div class="accordion-content" id="configAndroid">
              <ul style="list-style: none">
                <li>Dirigete a <strong>configuración </strong> o ajustes dentro del menú de tu teléfono y seleccionalo</li>
                <li>En la sección de "<strong>Conexiones inalámbricas y redes" </strong> Selecciona <strong>Redes móviles.</strong></li>
                <li>Selecciona <strong>nombres de punto de acceso.</strong></li>
                <li>Selecciona simbolo "<strong>+</strong>"</li>
                <li>Ingresa los siguienetes datos en las casillas correspondientes, serán los únicos datos a ingresar: <br> <strong>Nombre:</strong>altcel <br><strong>APN:</strong>internet.mvnel.com <br>Guarda y seleciiona como <strong>APN:</strong></li>
              </ul>
            </div>
          </div>
  
          <div class="accordion-container">
            <a href="#" class="accordion-titulo">Configuración de internet Iphone<span class="toggle-icon"></span></a>
            <div class="accordion-content" id="configIphone">
              <ul style="list-style: none">
                <li>Conéctate a internet vía Wifi ya que es necesario para poder configurar tu dispositivo</li>
                <li>Dirígete a tu navegador web "Safari" e ingresa la siguiente dirección: www.altcel.com/apnios</li>
                <li>En automático descargará la configuración para tu iPhone</li>
                <li>Seleccione instalar una vez finalizada la instalación estás listo para disfrutar de tu servicio.</li>
              </ul>
            </div>
          </div>
  
          <div class="accordion-container">
            <a href="#" class="accordion-titulo">Agregar tu número de teléfono en mensajes o FaceTime<span class="toggle-icon"></span></a>
            <div class="accordion-content" id="telefono">
              <ul style="list-style: none">
                <li>Ve a Configuración > Mensajes y asegúrate de que ¡Message esté activado. Es posible que debas esperar un momento hasta que se active.</li>
                <li>Toca Enviar y recibir. Si ves el mensaje "Usar tu Apple ID para iMessage", tócalo e inica sesión con la misma Apple ID que usas en la Mac, el iPad y el iPod touch.</li>
                <li>En la sección "Puedes recibir mensajes de ¡Message", asegúrate de que tu número de teléfono y tu Apple ID estén seleccionados.</li>
                <li>Ve a Configuración>FaceTime y en la sección "Se te puede contactar por FaceTime en", asegúrate de que tu número de teléfono y tu Apple ID estén seleccionados.</li>
                <li>Activar el botón de enviar como SMS</li>
              </ul>
            </div>
          </div>
  
          <div class="accordion-container">
            <a href="#" class="accordion-titulo">Preguntas frecuentes<span class="toggle-icon"></span></a>
            <div class="accordion-content" id="preguntas">
              <ul style="list-style: none">
                <li><h3>¿Qué es ALTCEL</h3></li>
                <li>Altcel es un proveedor de servicios móviles de voz, sms, datos y roaming.</li>
                <li><h3>¿Dónde adquiero mi SIM Altcel?</h3></li>
                <li>Puedes adquirir nuestra SIM Altcwel en línea desde la comodidad de tu casa, a través de Mercado Libre en el siguiente enlace: <a href="https://articulo.mercadolibre.com.mx/MLM-767552768-sim-altcel-_JM?quantity=1">Aqui</a></li>
                <li><h3>¿Cómo realizo mi recarga?</h3></li>
                <li>Puedes recargar tu saldo a través de nuestra página web, tiendas autorizadas y en nuestros CAA en el siguienete enlace: <a href="www.altcel.com/recargas">www.altcel.com/recargas</a></li>
                <li><h3>¿Existe cobertura en mi ciudad?</h3></li>
                <li>Consulta nuestro mapa de cobertura en el siguiente enlace: <a href="www.altcel.com/cobertura">www.altcel.com/cobertura</a></li>
                <li><h3>¿Cómo conservar tu número anterior?</h3></li>
                <li>Tienes derecho a la portabilidad de tu número, sólo tienes que enviar un mensaje de texto al 051 con la palabra "NIP" y recibirás un mensaje con un código, realiza tu tramite en el siguiente enlace: <a href="www.altcel.com/portabilidad">www.altcel.com/portabilidad</a></li>
                <li><h3>¿Mi teléfono está bloqueado?</h3></li>
                <li>Si compraste tu equipo después del 2015, es muy probable que tu teléfono no esté bloqueado, pero si lo estuviera, solicita a tu proveedor que lo libere, este trámite no tiene costo.</li>
                <li><h3>¿Cómo puedo contactarlos si tengo algún problema?</h3></li>
                <li>Contacto</li>
                <li>Medios de Contacto para Dudas y/o Aclaraciones comunicarse desde:</li>
                <li>Teléfono móvil ALTCEL al *282 sin costo en un horario de Lunes a Viernes de 08:30 a 18:30 hrs. Sábados de 10:00 a 14:30 hrs.</li>
                <li>Cualquier teléfono móvil en México marca sin costo al 800-2-ALTCEL en un horario de Lunes a Viernes de 08:30 a 18:30 hrs. Sábados de 10:00 a 14:30 hrs.</li>
                <li>Vía correo electrónico en: contacto@altcel.com</li>
                <li>La página web en https://altcel.com/</li>
              </ul>
            </div>
          </div>
  
          <div class="accordion-container">
            <a href="#" class="accordion-titulo">Contacto<span class="toggle-icon"></span></a>
            <div class="accordion-content" id="cotacto">
              <ul>
                <li>Medios de Contacto para Dudas y/o Aclaraciones comunicarse desde:</li>
                <ul style="list-style: none">
                  <li>Teléfono móvil ALTCEL al *282 sin costo en un horario de Lunes a Viernes de 08:30 a 18:30 hrs. Sábados de 10:00 a 14:30 hrs.</li>
                  <li>Cualquier teléfono móvil en México marca sin costo al 800-2-ALTCEL en un horario de Lunes a Viernes de 08:30 a 18:30 hrs. Sábados de 10:00 a 14:30 hrs.</li>
                  <li>Vía correo electrónico en: contacto@altcel.com</li>
                  <li>La página web en https://altcel.com/</li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
      </table>
    </div>
  </div>

  <section id="page-title" class="page-title-center dudas">

    <div class="container clearfix" style="margin-top: 30px">
        <p><strong>¿Aún tienes alguna duda?</strong><br> Si no pudiste encontrar tu respuesta, recuerda que siempre puedes contactarnos. <br> Te responderemos a la brevedad.</p>
    </div>

</section><!-- #page-title end -->


<section id="page-title" class="page-title-left soporte">

  <div class="container clearfix">
    <p>¿Te quedaste sin saldo? Consulta tu <br> plan favorito y <strong>recarga desde $10.00</strong></p>
    <button class="btn btnsomos"><a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta">Recarga</a></button>
    <img src="{!! asset('images/1.png') !!}" class="img-soporte" alt="" >
  </div>

</section><!-- #page-title end -->

@stop

@section('scripts')
  <script type="text/javascript">
  window.onload=function () {
    $('#planes').addClass('current');
    $('#planes-m').addClass('current');
  };

  $(".accordion-titulo").click(function(){
		
    var contenido=$(this).next(".accordion-content");
       
    if(contenido.css("display")=="none"){ //open		
       contenido.slideDown(250);			
       $(this).addClass("open");
    }
    else{ //close		
       contenido.slideUp(250);
       $(this).removeClass("open");	
   }
               
 });

 $('.soportew').click(function(){
   val = $(this).data('soporte')
   console.log(val)
   if (val == 'activation') {
     
   }else if (val == 'confAndroid') {
    
   }else if (val == 'confIphone') {
     
   }else if (val == 'telefono') {
     
   }else if (val == 'preguntas') {
     
   }else if (val == 'contacto') {
     
   }
  //  return false;
 })


 //acordeon 2
 var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
 var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
  </script>

  
@stop
