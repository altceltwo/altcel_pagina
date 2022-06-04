@extends('layouts.master')

@section('content')
<section id="slider"  class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
	<div class="slider-parallax-inner">
 
	  <div class="swiper-container swiper-parent " style="background-image: url('images/QuienesSomos.jpg'); background-size: cover;background-repeat: no-repeat;">
	    <div class="swiper-wrapper">
        <div class="swiper-slide dark" >
          <div class="col_one_third" id="indexp">
            <p class="text-justify animate__animated animate__pulse animate__infinite">
              ¡Disfruta <strong>al máximo</strong> de todos los beneficios de cambiarte a Altcel!
            </p>
            <div class="row" id="btnIndex">
              <a href="{!! URL::to('planes') !!}" class="btn btnprincipal1">PAQUETES</a>
              <a href="https://altcel2.com/" class="btn btnprincipal2" >INTERNET</a>
            </div>
          </div>
        </div>
	    </div>
	  </div>
 
	  <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
 
	</div>
</section>
<section id="content">
  <section id="page-title" class="page-title-center">

    <div class="container clearfix">
      <div class="row" >
        <a href="{!! URL::to('planes') !!}" class="btn btnIndexOpt" ><img class="icon-index" src="{!! asset('images/1Paquetes.png') !!}" alt="Paquetes">Paquetes</a>
        <a href="https://altcel2.com/" class="btn btnIndexOpt" ><img class="icon-index" src="{!! asset('images/2Internet.png') !!}" alt="Internet">Internet</a>
        <a href="{!! URL::to('soporte') !!}" class="btn btnIndexOpt" ><img class="icon-index" src="{!! asset('images/3Soporte.png') !!}" alt="Soporte">Soporte</a>
      </div>
    </div>

</section><!-- #page-title end -->
  <div class="content-wrap">
    <div class="container clearfix">

        <div class="col-md-9">
          <p class="text-justify index-text">
            Atrévete a vivir la nueva experiencia en telefonia móvil y <strong>cámbiate a Altcel.</strong><br>¡Solicita  <mark style="background-color: red; color: white">tu SIM!</mark>
          </p>
          <hr class="hrIndex">
        </div>
      </div>
      <img src="{!! asset('images/1.png') !!}" class="img-index1" alt="">
      <img src="{!! asset('images/SIM.png') !!}" class="img-index2" alt="">
  </div>
</section>

@stop

@section('scripts')
  <script type="text/javascript">
    
  </script>
@stop
