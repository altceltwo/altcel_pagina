@extends('layouts.master')

@section('content')
<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

  <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
          <div class="swiper-slide dark" style="background-image: url('images/Distribuidor.jpg');">
            <img src="{!! asset('images/Frase-2.png') !!}" class="diasDiez" alt="" >
            <img src="{!! asset('images/4-Distribuidor.png') !!}" class="img-des" alt="" >
              <div class="col-md-5 dialog-dis">
                <p id="title-dis">¡Conviértete en <strong>distribuidor</strong>!</p>
                <p>Disfruta de todos los beneficios que te ofrecemos al convertirte en distribuidor oficial de Altcel. ¡No lo pienses más, conviértete en uno!</p>
              
                <a href="{!! URL::to('distribuidores/#dist') !!}" id="button-dis" class="btn" style="color: red; background-color: white">¡Quiero ser distribuidor!</a>
              </div>
          </div>
      </div>
  </div> 
</section>
<section id="content">
      <div class="container clearfix" style="margin-top: 10rem">
        <p style="font-size: 25px">¡Hola y bienvenido a este equipo! <strong>gracias por querer convertirte</strong> <br><strong>en distribuidor</strong> solo necesitamos un poco más de información.</p>
      </div>
      <hr style="height: 10px">
    <div  >
      
        <form  style="text-align: center; margin: 50px" name="register-form" class="nobottommargin" id="dist" >
            <div class="col_half">
                <label for="register-form-name">Teléfono:</label>
                <input id="phone" type="text"   placeholder="Su teléfono" value="" class="form-control input-dis"  />
            </div>

            <div class="col_half col_last">
                <label for="register-form-email">Nombre completo:</label>
                <input id="name" type="text" placeholder="Su nombre" value="" class="form-control input-dis" />
            </div>

            <div class="clear"></div>

            <div class="col_half">
                <label for="register-form-username">Correo electrónico:</label>
                <input id="email" type="email" placeholder="Su correo" value="" class="form-control input-dis" />
            </div>

            <div class="col_half col_last">
                <label for="register-form-phone">Ciudad:</label>
                <input  id="city" type="text" placeholder="Su ciudad" value="" class="form-control input-dis" />
            </div>

          </form>
          <br>
          <div class="" >
              <button id="dis"  class="btn btn-primary">Enviar</button>
          </div>
    </div>
</section>

@stop

@section('scripts')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
    $('#dis').click(function(){
      let name = $('#name').val();
      let email = $('#email').val();
      let city = $('#city').val();
      let phone = $('#phone').val();

      if ((phone.length > 0 && phone.length < 10) || (phone.length >10)) {
        Swal.fire({
              position: 'top-center',
              icon: 'error',
              title: 'Ingrese un número valido',
              showConfirmButton: false,
              timer: 1500
            })
        return false
      }else if(phone == ''){
        Swal.fire({
              position: 'top-center',
              icon: 'error',
              title: 'Ingrese un número',
              showConfirmButton: false,
              timer: 1500
            })
        return false
      }

      if (name == '') {
        Swal.fire({
              position: 'top-center',
              icon: 'error',
              title: 'Ingrese un nombre',
              showConfirmButton: false,
              timer: 1500
            })
        return false
      }

      if (email == '') {
        Swal.fire({
              position: 'top-center',
              icon: 'error',
              title: 'Ingrese un correo electronico',
              showConfirmButton: false,
              timer: 1500
            })
        return false
      }

      if (city == '') {
        Swal.fire({
              position: 'top-center',
              icon: 'error',
              title: 'Ingrese una ciudad',
              showConfirmButton: false,
              timer: 1500
            })
        return false
      }

      

      $.ajax({
        url: "{{route('newDealer')}}",
        method: 'GET',
        data: {name:name, email:email, city:city, phone:phone},
        success: function(response){
          console.log(response.http_code)
          if (response.http_code == '200') {
            Swal.fire({
              position: 'top-center',
              icon: 'success',
              title: 'Se ha realizado su registro',
              showConfirmButton: false,
              timer: 1500
            })
          }
          return false;
        }
      })
    });
  </script>

@stop
