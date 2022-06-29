@extends('layouts.master')

@section('content')
<!-- Page Title
  ============================================= -->
  <section id="slider"  class="slider-element slider-parallax swiper_wrapper full-screen clearfix {{(request() -> is ('quienesomos*') ) ? 'carru__imga' : ''}}">
    <div class="slider-parallax-inner">

      <div class="swiper-container swiper-parent cambio_img" style="background-image: url('images/QuienesSomos.jpg') ; background-size: cover;background-repeat: no-repeat;">
        <div class="swiper-wrapper">
          <div class="swiper-slide dark img__somos" >
            <div class="col_one_third" id="somos">
              <div >
                <h3 class="text_quienesSomos"><strong>¿Quiénes somos?</strong></h3>
              </div>
              <p class="text-justify somo_text">
                Somos una empresa especializada en comercializar productos y servicios en el ramo de telecomunicaciones.
              </p>
            </div>
          </div>
        </div>
      </div>

      <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

    </div>
  </section>
  <!-- Page Title
  ============================================= -->
  <section id="content">
      <div class="col_one_third textQuienesSomos" id="somos">
        <div >
          <h3 class="text_quienesSomos2"><strong>¿Quiénes somos?</strong></h3>
        </div>
        <p class="text-justify somo_text2">
          Somos una empresa especializada en comercializar productos y servicios en el ramo de telecomunicaciones.
        </p>
      </div>
    <div class="content-wrap">
      <hr id="visionmisionhr">
      <div class=" divMision">
        <p class="un_mision">Una <span class="spanSomos">misión</span> nunca podrá cumplirse <br><span class="leyendaMV" style="text-align: center"> si no se tiene un <span class="spanSomos">visión...</span></span></p>
      </div>
      <hr id="visionmisionhr2">

    </div>
    <br>
    <div class="content-wrap">
      <div class="row" id="msiondiv">
        <img src="{!! asset('images/Misión.gif') !!}" class="gifMision" alt="Funny image"> 
        <div id="mision">
          <h4 class="h4VisiMis">Misión</h4>
          <hr id="hrmision"><hr id="hrmision2">
          <p id="pMision">Ser un referente en el sector de telecomunicaciones, brindando a nuestros clientes la mejor conexión y calidad en nuestros servicios.</p>
        </div>
      </div>
    </div>
    <div class="content-wrap">
      <div class="row" id="visiondiv">
        <img src="{!! asset('images/Visión.gif') !!}" class="gifVision" alt="Funny image"> 
        <div id="vision">
          <h4 class="h4Visi">Visión</h4>
          <hr id="hrvision"><hr id="hrvision2">
          <p id="pVision">Posicionarnos rápidamente como una empresa lider en las Telecomunicaciones, a nivel Nacional, con innovación y gestionando eficazmente la calidad, en nuestros productos y servicios.</p>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section id="page-title" class="page-title-left soporte">
      <img src="{!! asset('images/Círculos-01.png') !!}" id="circle" alt="">
  
      <div class="container clearfix">
        <p class="t_saldo">¿Te quedaste sin saldo? Consulta tu <br> plan favorito y <strong>recarga desde $10.00</strong></p>
        <button class="btn btnsomos"><a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta">Recarga</a></button>
        
        <img src="{!! asset('images/animatedSomos.png') !!}" class="img-somosBanner" alt="" >
      </div>
    
    </section><!-- #page-title end -->
    <div class="row">
    </div>
    <div class="row">
      <img class="destellosSomos2" src="{!! asset('images/Degradado-2.png') !!}" alt="">
      <img class="destellosSomos1" src="{!! asset('images/Degradado-1.png') !!}" alt="">
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
