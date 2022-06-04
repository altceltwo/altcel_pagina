@extends('layouts.master')

@section('content')
<!-- Page Title
  ============================================= -->
  <section style="margin-top: 30px" id="page-title" class="page-title-pattern soporteprincipal">

    <div class="container clearfix">
      <h1>Legales</h1>
    </div>

  </section><!-- #page-title end -->
  <!-- Page Title
  ============================================= -->
  <section id="content" style="margin-top: 30px">
    <div class="col-md-12">
      <div class="row">
           <div class="col-md-4">
              <li style="list-style: none;"><button id="legal1" class="legales liLegals" data-legals="cpc">Código de Prácticas Comerciales.</button></li>
              <li style="list-style: none;"><button id="legal2" class="legales liLegals" data-legals="cdm">Código de Derechos Mínimos.</button></li>
              <li style="list-style: none;"><button id="legal3" class="legales liLegals" data-legals="fda">Formato Derechos ARCO.</button></li>
              <li style="list-style: none;"><button id="legal4" class="legales liLegals" data-legals="pyc">Politícas y Condiciones de Uso.</button></li>
              <li style="list-style: none;"><button id="legal5" class="legales liLegals" data-legals="cap">Contrato de Adhesión Altcel Pos Pago.</button></li>
              <li style="list-style: none;"><button id="legal6" class="legales liLegals" data-legals="caa">Contrato de Adhesión Altcel.</button></li>
           </div>
          <div class="pdf-legales pdf col-md-8" id="cpcLegal">
             <div class="col-md-4" >
              <div class="legals" >
                <img src="{{ asset('images/pdf/cpc.jpg') }}" alt="Código de Prácticas Comerciales">
              </div>
             </div>
             <div class="col-md-4 ">
               <h4>Código de Prácticas Comerciales</h4>
               <div class="row btn-group" style="margin-bottom: 15px; ">
                 <a class="btn bglegals borderLegals" href="{{ asset('pdf/cpc.pdf') }}" ><img class="img-legales" src="{!! asset('images/Legales-view.png') !!}" alt=""></a >
                 <a class="btn bglegals borderLegals" href="{{ asset('pdf/cpc.pdf') }}" download ><img class="img-legales" src="{!! asset('images/Legales-download.png') !!}" alt=""></a >
                 <a class="btn bglegals" href="#" ><img class="img-legales" src="{!! asset('images/Legales-imprimir.png') !!}" alt=""></a >
               </div>
               <audio src="{{ asset('audio/Codigosdepracticascomerciales.mp3') }}" preload="none" controls></audio>
             </div>
           </div>

          <div class="pdf-legales pdf col-md-8" id="cdmLegal">
            <div class="col-md-4" id="practicasComerciales">
             <div class="legals" >
               <img src="{{ asset('images/pdf/cdm.jpg') }}" alt="Código de Derechos Mínimos">
             </div>
            </div>
            <div class="col-md-4 " >
              <h4>Código de Derechos Mínimos</h4>
              <div class="row btn-group" style="margin-bottom: 15px; ">
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/CARTA _DE_DERECHOS_MINIMOS_DE_LOS_USUARIOS.pdf') }}" ><img class="img-legales" src="{!! asset('images/Legales-view.png') !!}" alt=""></a >
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/CARTA _DE_DERECHOS_MINIMOS_DE_LOS_USUARIOS.pdf') }}" download=""><img class="img-legales" src="{!! asset('images/Legales-download.png') !!}" alt=""></a >
                <a class="btn bglegals " href="#"><img class="img-legales" src="{!! asset('images/Legales-imprimir.png') !!}" alt=""></a >
              </div>
              
            </div>
          </div>
           
          <div class="pdf-legales pdf col-md-8" id="fdaLegal">
            <div class="col-md-4" id="practicasComerciales">
             <div class="legals" >
               <img src="{{ asset('images/pdf/fda.jpg') }}" alt="Formato Derechos ARCO">
             </div>
            </div>
            <div class="col-md-4 ">
              <h4>Formato Derechos ARCO</h4>
              <div class="row btn-group" style="margin-bottom: 15px; ">
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/fda.pdf') }}"><img class="img-legales" src="{!! asset('images/Legales-view.png') !!}" alt=""></a >
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/fda.pdf') }}" download><img class="img-legales" src="{!! asset('images/Legales-download.png')!!}" alt=""></a >
                <a class="btn bglegals" href="#" ><img class="img-legales" src="{!! asset('images/Legales-imprimir.png') !!}" alt=""></a >
              </div>
              <audio src="{{ asset('audio/FormatoDerechoArcoMp3PDF3.mp3') }}" preload="none" controls></audio>
            </div>
          </div>

          <div class="pdf-legales pdf col-md-8" id="pycLegal">
            <div class="col-md-4" id="practicasComerciales">
             <div class="legals" >
               <img src="{{ asset('images/pdf/Politicas_y_uso.jpg') }}" alt="Politícas y Condiciones de Uso">
             </div>
            </div>
            <div class="col-md-4 ">
              <h4>Politícas y Condiciones de Uso</h4>
              <div class="row btn-group" style="margin-bottom: 15px; ">
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/Politicas.pdf') }}"><img class="img-legales" src="{!! asset('images/Legales-view.png') !!}" alt=""></a >
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/Politicas.pdf') }}"><img class="img-legales" src="{!! asset('images/Legales-download.png') !!}" alt=""></a >
                <a class="btn bglegals " href="#" ><img class="img-legales" src="{!! asset('images/Legales-imprimir.png') !!}" alt=""></a >
              </div>
              <audio src="{{ asset('audio/PoliticasycondicionesdeUsomp3PDF4.mp3') }}" preload="none" controls></audio>
            </div>
          </div>

          <div class="pdf-legales pdf col-md-8" id="capLegal">
            <div class="col-md-4" id="practicasComerciales">
             <div class="legals" >
               <img src="{{ asset('images/pdf/Contrato_Adhesion_pospago.jpg') }}" alt="Código de Prácticas Comerciales">
             </div>
            </div>
            <div class="col-md-4 ">
              <h4>Contrato de Adhesión Pos Pago</h4>
              <div class="row btn-group" style="margin-bottom: 15px; ">
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/Contrato_Adhesion_pospago.pdf') }}" ><img class="img-legales" src="{!! asset('images/Legales-view.png') !!}" alt=""></a >
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/Contrato_Adhesion_pospago.pdf') }}" download><img class="img-legales" src="{!! asset('images/Legales-download.png') !!}" alt=""></a >
                <a class="btn bglegals" href="#" ><img class="img-legales" src="{!! asset('images/Legales-imprimir.png') !!}" alt=""></a >
              </div>
              {{-- <audio src="{{ asset('audio/Codigosdepracticascomerciales.mp3') }}" preload="none" controls></audio> --}}
            </div>
          </div>

          <div class="pdf-legales pdf col-md-8" id="caaLegal">
            <div class="col-md-4" id="practicasComerciales">
             <div class="legals" >
               <img src="{{ asset('images/pdf/CONTRATO_ADHESION_REGISTRO_080-2019.jpg') }}" alt="Código de Prácticas Comerciales">
             </div>
            </div>
            <div class="col-md-4 ">
              <h4>Contrato de Adhesión Altcel</h4>
              <div class="row btn-group" style="margin-bottom: 15px; ">
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/CONTRATO_ADHESION_REGISTRO_080-2019.pdf') }}"><img class="img-legales" src="{!! asset('images/Legales-view.png') !!}" alt=""></a >
                <a class="btn bglegals borderLegals" href="{{ asset('pdf/CONTRATO_ADHESION_REGISTRO_080-2019.pdf') }}" download><img class="img-legales" src="{!! asset('images/Legales-download.png') !!}" alt=""></a >
                <a class="btn bglegals" href="#" ><img class="img-legales" src="{!! asset('images/Legales-imprimir.png') !!}" alt=""></a >
              </div>
              <audio src="{{ asset('audio/Contratoadhesionregistromp3PDF5.mp3') }}" preload="none" controls></audio>
            </div>
          </div>

      </div>
 </div>
  </section>
@stop

@section('scripts')
  <script type="text/javascript">
  

  $('.legales').click(function(){
    val = $(this).data('legals')

    if (val == 'cpc') {
      // $('#cpcLegal').removeClass('pdf');
      $('#cpcLegal').show();
      $('#cdmLegal').hide();
      $('#fdaLegal').hide();
      $('#pycLegal').hide();
      $('#capLegal').hide();
      $('#caaLegal').hide();

      $('#legal1').addClass('select-corb');
      $('#legal2').removeClass('select-corb');
      $('#legal3').removeClass('select-corb');
      $('#legal4').removeClass('select-corb');
      $('#legal5').removeClass('select-corb');
      $('#legal6').removeClass('select-corb');
    }else if (val == 'cdm') {
      $('#cpcLegal').hide();
      $('#cdmLegal').show();
      $('#fdaLegal').hide();
      $('#pycLegal').hide();
      $('#capLegal').hide();
      $('#caaLegal').hide();

      $('#legal1').removeClass('select-corb');
      $('#legal2').addClass('select-corb');
      $('#legal3').removeClass('select-corb');
      $('#legal4').removeClass('select-corb');
      $('#legal5').removeClass('select-corb');
      $('#legal6').removeClass('select-corb');
    }else if (val == 'fda') {
      $('#cpcLegal').hide();
      $('#cdmLegal').hide();
      $('#fdaLegal').show();
      $('#pycLegal').hide();
      $('#capLegal').hide();
      $('#caaLegal').hide();

      $('#legal1').removeClass('select-corb');
      $('#legal2').removeClass('select-corb');
      $('#legal3').addClass('select-corb');
      $('#legal4').removeClass('select-corb');
      $('#legal5').removeClass('select-corb');
      $('#legal6').removeClass('select-corb');
    }else if (val == 'pyc') {
      $('#cpcLegal').hide();
      $('#cdmLegal').hide();
      $('#fdaLegal').hide();
      $('#pycLegal').show();
      $('#capLegal').hide();
      $('#caaLegal').hide();

      $('#legal1').removeClass('select-corb');
      $('#legal2').removeClass('select-corb');
      $('#legal3').removeClass('select-corb');
      $('#legal4').addClass('select-corb');
      $('#legal5').removeClass('select-corb');
      $('#legal6').removeClass('select-corb');
    }else if (val == 'cap') {
      $('#cpcLegal').hide();
      $('#cdmLegal').hide();
      $('#fdaLegal').hide();
      $('#pycLegal').hide();
      $('#capLegal').show();
      $('#caaLegal').hide();

      $('#legal1').removeClass('select-corb');
      $('#legal2').removeClass('select-corb');
      $('#legal3').removeClass('select-corb');
      $('#legal4').removeClass('select-corb');
      $('#legal5').addClass('select-corb');
      $('#legal6').removeClass('select-corb');
    }else if (val == 'caa') {
      $('#cpcLegal').hide();
      $('#cdmLegal').hide();
      $('#fdaLegal').hide();
      $('#pycLegal').hide();
      $('#capLegal').hide();
      $('#caaLegal').show();

      $('#legal1').removeClass('select-corb');
      $('#legal2').removeClass('select-corb');
      $('#legal3').removeClass('select-corb');
      $('#legal4').removeClass('select-corb');
      $('#legal5').removeClass('select-corb');
      $('#legal6').addClass('select-corb');
    }
  })
  </script>
@stop
