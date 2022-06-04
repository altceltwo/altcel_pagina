@extends('layouts.master')

@section('content')
<!-- Page Title
  ============================================= -->
  <section style="margin-top: 30px" id="page-title" class="page-title-pattern soporteprincipal">

    <div class="container clearfix">
      <h1>Aviso de privacidad</h1>
    </div>

  </section><!-- #page-title end -->
  <!-- Page Title
  ============================================= -->
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">

					<div class="col_full">
            

						{{-- <div class="heading-block fancy-title nobottomborder title-bottom-border">
							<h4>Aviso de <span>Privacidad</span>.</h4>
						</div> --}}

						<p class="text-justify" id="text-aviso">
              ALTCEL SAPI de C.V. con domicilio en Tuxtla Gutiérrez, Chiapas, sobre el uso y protección de sus datos personales.
              <br>
              <br>

              Su información personal será utilizada para proveer el (los) servicio(s) de: Venta de Equipos o Servicios de voz, SMS, datos o roaming, Soporte, Análisis de Crédito y todos los servicios prestados por nuestra empresa, los cuales haya solicitado, llámese vía telefónica o bien a través de correo electrónico o cualquier otro medio respecto de confirmación de datos, del cobro de parcialidades de servicio o bien sobre los documentos necesarios para continuar con los servicios pactados en pedido de equipos, solicitud de servicio y/o garantías de equipos o tarjetas. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales:
              <br>
              <br>
              Nombre, Razón o Denominación Social. 
              <br>
              Domicilio del Cliente.
              <br>
              Número Telefónico (casa, oficina o móvil) y Correo Electrónico. 
              <br>
              Copia de Credencial de Elector y/o copia de una identificación vigente. 
              <br>
              <br>

              Usted o su representante legal podrá ejercer cualquiera de los derechos de acceso, rectificación, cancelación u oposición (en lo sucesivo “Derechos ARCO”), así como revocar su consentimiento para el tratamiento de sus datos personales enviando un correo electrónico al Departamento de Datos Personales de ALTCEL a la dirección (contacto@altcel.com) donde se le atenderá en tiempo y forma.
              Su petición deberá ser realizada a través del Formulario Único para Ejercicio de Derechos ARCO, Revocación del Consentimiento y/o Limitación del Uso o Divulgación de Datos Personales (en lo sucesivo el “Formulario”) que se encuentra a su disposición en esta sección al final de la página y contiene todos los elementos para poder atender su solicitud conforme a la normatividad. Para que el Departamento de Datos Personales de ALTCEL pueda darle seguimiento a su solicitud, usted o su representante legal, deberá acreditar correctamente su identidad para lo que es necesario que complete todos los campos indicados en el Formulario y lo acompañe con copia de alguna de las identificaciones oficiales vigentes que se señalan en el mismo.
              En caso de que la información proporcionada en el Formulario sea errónea o insuficiente, o bien, no se acompañen los documentos de acreditación correspondientes, el Departamento de Datos Personales de ALTCEL, dentro de los cinco (5) días hábiles siguientes a la recepción de la solicitud, podrá requerirle que aporte los elementos o documentos necesarios para dar trámite a la misma. Usted contará con diez (10) días hábiles para atender el requerimiento, contados a partir del día siguiente en que lo haya recibido. De no dar respuesta en dicho plazo, se tendrá por no presentada la solicitud correspondiente.
              El Departamento de Datos Personales de ALTCEL le comunicará la determinación adoptada, en un plazo máximo de veinte (20) días hábiles contados desde la fecha en que se recibió la solicitud, a efecto de que, si resulta procedente, haga efectiva la misma dentro de los quince (15) días hábiles siguientes a que se comunique la respuesta. La respuesta se dará vía electrónica a la dirección de correo que se especifique en el Formulario.
              <br>
              <br>

              Así mismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En ese sentido, su información puede ser compartida solo bajo los supuestos del Artículo 36 y 37 de la Ley Federal de Protección de Datos Personales en posesión de los particulares.
              <br>
              <br>

              Si consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad. 
              <br>
              <br>
              Cualquier modificación a este aviso de privacidad podrá consultarla en www.altcel.com/AvisodePrivacidad 
            </p>

					</div>

				</div>

    </div>
  </section>
@stop

@section('scripts')
  <script type="text/javascript">
  window.onload=function () {
    $('#planes').addClass('current');
    $('#planes-m').addClass('current');
  };
  </script>
@stop
