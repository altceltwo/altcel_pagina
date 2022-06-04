@extends('layouts.master')

@section('content')
<!-- Page Title
  ============================================= -->
  <section id="slider"  class="slider-element slider-parallax swiper_wrapper full-screen clearfix">
    <div class="slider-parallax-inner">

      <div class="swiper-container swiper-parent" style="background-image: url('images/QuienesSomos.jpg') ; background-size: cover;background-repeat: no-repeat;">
        <div class="swiper-wrapper">
          <div class="swiper-slide dark" >
            <div class="col_one_third" id="somos">

              <div >
                <h3><strong>¿Quiénes somos?</strong></h3>
              </div>
              <p class="text-justify">
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
    <div class="content-wrap">
      <hr id="visionmisionhr">
      <div class=" divMision">
        <p style="font-size: 15px">Una <span class="spanSomos">misión</span> nunca podrá cumplirse <br> si no se tiene un <span class="spanSomos">visión...</span></p>
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
          <p id="pMision">Ser unreferente en el sector de telecomunicaciones, brindando a nuestros clientes la mejor conexión y calidad en nuestros servicios.</p>
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
        <p>¿Te quedaste sin saldo? Consulta tu <br> plan favorito y <strong>recarga desde $10.00</strong></p>
        <button class="btn btnsomos"><a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta">Recarga</a></button>
        
        <img src="{!! asset('images/2.png') !!}" class="img-soporte" alt="" >
      </div>
    
    </section><!-- #page-title end -->
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
