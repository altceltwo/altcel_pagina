@extends('layouts.master')

@section('content')
<section id="slider"  class="slider-element slider-parallax swiper_wrapper full-screen clearfix {{(request() -> is ('/*') ) ? 'carru__img' : ''}}">
<!-- <section id="slider"  class="slider-element slider-parallax  clearfix {{(request() -> is ('/*') ) ? 'carru__img' : ''}}"> -->
	<div class="slider-parallax-inner">
 
	  <!-- <div class="swiper-container swiper-parent " style="background-image: url('images/QuienesSomos.jpg'); background-size: cover;background-repeat: no-repeat;">
	    <div class="swiper-wrapper">
        <div class="swiper-slide dark" >
          <div class="col_one_third" id="indexp">
            <p class="text-justify animate__animated animate__pulse animate__infinite">
              ¡Disfruta <strong>al máximo</strong> de todos los beneficios de cambiarte a Altcel!
            </p>
            <div class="row" id="btnIndex">
              <a href="{!! URL::to('planes') !!}" class="btn btnprincipal1">PAQUETES<i class="fa-solid fa-box-open"></i></a>
              <a href="https://altcel2.com/" class="btn btnprincipal2" >INTERNET<i class="fa-solid fa-earth-americas"></i></a>
            </div>
          </div>
        </div>
	    </div>
	  </div> -->

    <!-- <div class="col_one_third" id="indexp">
            <p class="text-justify animate__animated animate__pulse animate__infinite">
              ¡Disfruta <strong>al máximo</strong> de todos los beneficios de cambiarte a Altcel!
            </p>
            <div class="row" id="btnIndex">
              <a href="{!! URL::to('planes') !!}" class="btn btnprincipal1">PAQUETES<i class="fa-solid fa-box-open"></i></a>
              <a href="https://altcel2.com/" class="btn btnprincipal2" >INTERNET<i class="fa-solid fa-earth-americas"></i></a>
            </div>
      </div> -->

      
    <div class="slider">
    <div class="col_one_third slider__informa " id="indexp">
            <p class="text-justify animate__animated animate__pulse animate__infinite color-text ">
              ¡Disfruta <strong>al máximo</strong> de todos los beneficios de cambiarte a Altcel!
            </p>
            <div class="row" id="btnIndex">
              <a href="{!! URL::to('planes') !!}" class="btn btnprincipal1">PAQUETES<i class="fa-solid fa-box-open"></i></a>
              <a href="https://altcel2.com/" class="btn btnprincipal2" >INTERNET<i class="fa-solid fa-earth-americas"></i></a>
            </div>
      </div>
            <ul class="ul-imagen">
                <li class="li-imagen"><img src = "{!! asset('images/car1.jpg') !!}"></li>
                <li class="li-imagen"><img src = "{!! asset('images/car3.jpg') !!}"></li>
                <li class="li-imagen"><img src = "{!! asset('images/car4.jpg') !!}"></li>
                <li class="li-imagen"><img src = "{!! asset('images/car2.jpg') !!}"></li>
                <li class="li-imagen"><img src = "{!! asset('images/car1.jpg') !!}"></li>
            </ul>
    </div>


<!--  
	  <div class="swiper-container swiper-parent " style="background-image: url('images/QuienesSomos.jpg'); background-size: cover;background-repeat: no-repeat;">
	    <div class="swiper-wrapper">
        <div class="swiper-slide dark" >
          <div class="col_one_third" id="indexp">
            <p class="text-justify animate__animated animate__pulse animate__infinite">
              ¡Disfruta <strong>al máximo</strong> de todos los beneficios de cambiarte a Altcel!
            </p>
            <div class="row" id="btnIndex">
              <a href="{!! URL::to('planes') !!}" class="btn btnprincipal1">PAQUETES<i class="fa-solid fa-box-open"></i></a>
              <a href="https://altcel2.com/" class="btn btnprincipal2" >INTERNET<i class="fa-solid fa-earth-americas"></i></a>
            </div>
          </div>
        </div>
	    </div>
	  </div> -->
 
	  <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
 
	</div>
</section>
<section id="content">
  <section id="page-title" class="page-title-center">

    <div class="container clearfix">
      <div class="row plan__paquet" >
        <a href="{!! URL::to('planes') !!}" class="btn btnIndexOpt btn-informacion" >
          <img class="icon-index" src="{!! asset('images/Telefono3.png') !!}" alt="Paquetes">
          <h2 class="paquete pat__paquete">Paquetes</h2>
        </a>
        <a href="https://altcel2.com/" class="btn btnIndexOpt btn-informacion" >
          <img class="icon-index" src="{!! asset('images/internet1.png') !!}" alt="Internet">
          <h2 class="paquete">Internet</h2>
        </a>
        <a href="{!! URL::to('soporte') !!}" class="btn btnIndexOpt btn-informacion" >
          <img class="icon-index" src="{!! asset('images/Configuracion.png') !!}" alt="Soporte">
          <h2 class="paquete">Soporte</h2>
        </a>
      </div>
    </div>

</section><!-- #page-title end -->
  <div class="content-wrap">
    <div class="container clearfix">

        <div class="col-md-9">
          <p class="text-justify index-text">
            Atrévete a vivir la nueva experiencia en telefonia móvil y <strong>cámbiate a Altcel.</strong><br>¡Solicita  <mark style="background-color: red; "><a style="color: white!important" href="https://api.whatsapp.com/send?phone=529613601404">tu SIM!</a></mark>
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
