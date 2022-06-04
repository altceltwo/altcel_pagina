@extends('layouts.master')

@section('content')
<!-- Page Title
  ============================================= -->
  <section style=" margin-top: 30px" id="page-title" class="page-title-pattern soporteprincipal">

    <div class="container clearfix">
      <h1>Paquetes</h1>
    </div>

  </section><!-- #page-title end -->
  
  <!-- Page Title
  ============================================= -->
  <section id="content">
    <section id="page-title" class="page-title-center paquetes" style="margin-top: 30px">

      <div class="container clearfix">
        <p id="paquetesP">Conoce todos nuestros productos de telefonia movil, elige el que mejor se <br> adecué a tus necesidades y recarga en linea.</p>
      </div>
      <img  src="{!! asset('images/Celular.png') !!}" alt="img-celular" class="img-paquetes">
  
  </section>
      <div class="container clearfix">
        <div class="col_full">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-header py-2">
                      <h5 class="price">Paquete <strong>$69.<sup>00</sup></strong></h5>
                    </div>
                    {{-- <ul class="li-card"> --}}
                      <li class="vel-package li-card">500 mb</li>
                      <li class="li-card">Vigencia del plan: <strong>7 días</strong></li>
                      <hr class="hrPackage">
                    {{-- </ul> --}}
                    {{-- <ul class="li-card"> --}}
                      <li class="li-card">Min / SMS / Ilimitados*</li>
                      <li class="li-card">WhatsApp Ilimitado*</li>
                      <hr class="hrPackage">
                    {{-- </ul> --}}
                    <a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta" class="btn btn-primary boton-recarga" ><strong>¡RECARGAR!</strong></a>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-header py-2">
                      <h5>Paquete <strong>$99.<sup>00</sup></strong></h5>
                    </div>
                    {{-- <ul class="li-card"> --}}
                      <li class="vel-package li-card">1,000 mb</li>
                      <li class="li-card">Vigencia del plan: <strong>17 días</strong></li>
                      <hr class="hrPackage" >
                    {{-- </ul> --}}
                    {{-- <ul class="li-card"> --}}
                      <li class="li-card">Min / SMS / Ilimitados*</li>
                      <li class="li-card">WhatsApp Ilimitado*</li>
                      <hr class="hrPackage">
                    {{-- </ul> --}}
                    <a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta" class="btn btn-primary boton-recarga" ><strong>¡RECARGAR!</strong></a>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-header py-2">
                      <h5>Paquete <strong>$199.<sup>00</sup></strong></h5>
                    </div>
                    {{-- <ul class="li-card"> --}}
                      <li class="vel-package li-card">2,000 mb</li>
                      <li class="li-card">Vigencia del plan: <strong>30 días</strong></li>
                      <hr class="hrPackage">
                    {{-- </ul> --}}
                    {{-- <ul class="li-card"> --}}
                      <li class="li-card">Min / SMS / Ilimitados*</li>
                      <li class="li-card">WhatsApp Ilimitado*</li>
                      <hr class="hrPackage">
                    {{-- </ul> --}}
                    <a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta" class="btn btn-primary boton-recarga" ><strong>¡RECARGAR!</strong></a>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-header py-2">
                      <h5>Paquete <strong>$299.<sup>00</sup></strong></h5>
                    </div>
                    {{-- <ul class="li-card"> --}}
                      <li class="vel-package li-card">3,000 mb</li>
                      <li class="li-card">Vigencia del plan: <strong>30 días</strong></li>
                      <hr class="hrPackage">
                    {{-- </ul>
                    <ul class="li-card"> --}}
                      <li class="li-card">Min / SMS / Ilimitados*</li>
                      <li class="li-card">WhatsApp Ilimitado*</li>
                      <hr class="hrPackage">
                    {{-- </ul> --}}
                    <a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta" class="btn btn-primary boton-recarga" ><strong>¡RECARGAR!</strong></a>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-header py-2">
                      <h5>Paquete <strong>$499.<sup>00</sup></strong></h5>
                    </div>
                    {{-- <ul class="li-card"> --}}
                      <li class="vel-package li-card">10,000 mb</li>
                      <li class="li-card">Vigencia del plan: <strong>33 días</strong></li>
                      <hr class="hrPackage">
                    {{-- </ul> --}}
                    {{-- <ul class="li-card"> --}}
                      <li class="li-card">Min / SMS / Ilimitados*</li>
                      <li class="li-card">WhatsApp Ilimitado*</li>
                      <hr class="hrPackage">
                    {{-- </ul> --}}
                    <a href="https://api.whatsapp.com/send?phone=525612010013&app=facebook&entry_point=page_cta" class="btn btn-primary boton-recarga" ><strong>¡RECARGAR!</strong></a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
    </section>

    <section id="page-title" class="page-title-left paquete" style="margin-top: 30px">

      <div class="container clearfix">
        <img src="{!! asset('images/3.png') !!}" class="img-paquete" alt="" >
        <p>Recuerda <br>
        <strong style="color: rgb(194, 40, 40)">Haz tus propias recargas</strong><br>
        en tiendas <strong style="color: white">OXXO, </strong><br>Farmacias de <strong style="color: white">Ahorro</strong> <br>y muchos puntos más.</p>
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
