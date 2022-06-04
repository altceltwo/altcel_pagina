@extends('layouts.master')

@section('content')
<section style=" margin-top: 30px" id="page-title" class="page-title-pattern soporteprincipal">

  <div class="container clearfix">
    <h1>Cobertura</h1>
  </div>

</section><!-- #page-title end -->

<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">

        <div class="col_full">
          <div class="title-block">
            <h1>Cobertura, mapa de cobertura <span>2G,3G y 4GLTE</span></h1>
          </div>
        </div>


        <div class="col-md-12">
          <div class="col-md-3">
              <li style="list-style: none" class="li-cobert"><a href="#" id="cobert1" class="cobertura" data-coberturas="g2" style="border: none;  ">Cobertura 2G</a></li>
              <li style="list-style: none" class="li-cobert"><a href="#" id="cobert2" class="cobertura" data-coberturas="gV3" style="border: none;  ">Cobertura 3G VOZ</a></li>
              <li style="list-style: none" class="li-cobert"><a href="#" id="cobert3" class="cobertura" data-coberturas="gD3" style="border: none;  ">Cobertura 3G DATOS</a></li>
              <li style="list-style: none" class="li-cobert"><a href="#" id="cobert4" class="cobertura" data-coberturas="g4" style="border: none;  ">Cobertura 4G</a></li>
         
          </div>
          <div class="col-md-9 g2" id="cob2g">
            <div class="card-mapa">
              <div class="card-body" style="margin: 15px">
                <a data-fancybox="gallery" href="{{ asset('images/cobertura/2g altcel.png') }}"><img src="{{ asset('images/cobertura/2g altcel.png') }}" alt=""></a>
              </div>
              <div class="card-footer" style="height: 20px; background-color: rgb(78, 76, 76);border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;"></div>
            </div>
          </div>

          <div class="col-md-9 gV3" id="cob3gv">
            <div class="card-mapa">
              <div class="card-body" style="margin: 15px">
                <a data-fancybox="gallery" href="{{ asset('images/cobertura/3g datos altcel.png') }}"><img src="{{ asset('images/cobertura/3g datos altcel.png') }}" alt=""></a>
              </div>
              <div class="card-footer" style="height: 20px; background-color: rgb(78, 76, 76);border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;"></div>
            </div>
          </div>

          <div class="col-md-9 gD3" id="cob3gd">
            <div class="card-mapa">
              <div class="card-body" style="margin: 15px">
                <a data-fancybox="gallery" href="{{ asset('images/cobertura/3g VOZ altcel.png') }}"><img src="{{ asset('images/cobertura/3g VOZ altcel.png') }}" alt=""></a>
              </div>
              <div class="card-footer" style="height: 20px; background-color: rgb(78, 76, 76);border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;"></div>
            </div>
          </div>

          <div class="col-md-9 g4" id="cob4g" >
            <div class="card-mapa">
              <div class="card-body" style="margin: 15px">
                <a data-fancybox="gallery" href="{{ asset('images/cobertura/4g altcel.png') }}"><img src="{{ asset('images/cobertura/4g altcel.png') }}" alt=""></a>
              </div>
              <div class="card-footer" style="height: 20px; background-color: rgb(78, 76, 76);border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;"></div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="">
            <h1></h1>
            <p  style="text-align: justify; font-size: 1.7rem">
              Dentro de la cobertura del servicio, pueden presentarse condiciones que lo afecten debido a características técnicas como: interior de edificios, sitios subterráneos, elevadores, viajar en avión o en lugares en los que se presente una concentración inusual de usuarios.

              La calidad del servicio también depende del equipo que se utilice y las condiciones meteorológicas y tipográficas que prevalezcan, ya que pueden llegar a alterar el área de cobertura.

              *Por disposición oficial, el servicio provisto es bloqueado en centros penitenciarios, por lo que los usuarios pueden experimentar una recepción de señal incluso nula al encontrarse en la periferia de dichos centros. *
               <br>
            </p>
          </div>
        </div>

      </div>

  </div>
</section>
@stop

@section('scripts')
  <script type="text/javascript">
    $('.cobertura').click(function(){
      let val = $(this).data('coberturas')
      console.log(val)
      if (val =='g2') {
        $('#cob2g').removeClass('g2')
        $('#cob3gv').addClass('gV3')
        $('#cob3gd').addClass('gD3')
        $('#cob4g').addClass('g4')
        $('#cobert1').addClass('select-corb')
        $('#cobert2').removeClass('select-corb')
        $('#cobert3').removeClass('select-corb')
        $('#cobert4').removeClass('select-corb')
      }else if (val == 'gV3') {
        $('#cob3gv').removeClass('gV3')
        $('#cob2g').addClass('g2')
        $('#cob3gd').addClass('gD3')
        $('#cob4g').addClass('g4')
        $('#cobert1').removeClass('select-corb')
        $('#cobert2').addClass('select-corb')
        $('#cobert3').removeClass('select-corb')
        $('#cobert4').removeClass('select-corb')
      }else if (val == 'gD3') {
        $('#cob3gd').removeClass('gD3')
        $('#cob3gv').addClass('gV3')
        $('#cob2g').addClass('g2')
        $('#cob4g').addClass('g4')
        $('#cobert1').removeClass('select-corb')
        $('#cobert2').removeClass('select-corb')
        $('#cobert3').addClass('select-corb')
        $('#cobert4').removeClass('select-corb')
      }else if (val == 'g4') {
        $('#cob4g').removeClass('g4')
        $('#cob3gv').addClass('gV3')
        $('#cob3gd').addClass('gD3')
        $('#cob2g').addClass('g2')
        $('#cobert1').removeClass('select-corb')
        $('#cobert2').removeClass('select-corb')
        $('#cobert3').removeClass('select-corb')
        $('#cobert4').addClass('select-corb')
      }
      return false;
    })

  </script>
@stop
