@extends('layouts.master')

@section('content')
<!-- Page Title
  ============================================= -->
  <section style="margin-top: 30px" id="page-title" class="page-title-pattern soporteprincipal">

    <div class="container clearfix">
      <h1>Recargas</h1>
    </div>

  </section><!-- #page-title end -->
  <!-- Page Title
  ============================================= -->
  <section id="content" style="margin-bottom: 30px">
     <div >
          <div class="cardRecarga">
               <form id="register-form" style="text-align: center; margin: 50px" name="register-form" class="nobottommargin" id="dist" >
                   
       
                   <div class="col_half ">
                       <label for="register-form-email">Nombre completo:</label>
                       <input id="nombre" type="text" placeholder="Su nombre" value="" class="form-control input-dis"/>
                   </div>
                   <div class="col_half col_last">
                         <label for="register-form-username">Correo electrónico:</label>
                         <input id="correo" type="email" placeholder="Su correo" value="" class="form-control input-dis"/>
                    </div>
       
                    <div class="col_half col_last">
                         <label for="register-form-name">Teléfono:</label>
                         <input id="phone" type="text"   placeholder="Su teléfono" value="" class="form-control input-dis" />
                    </div>
                   <div class="clear"></div>
       
       
                    <div class="col_half ">
                         <label for="register-form-name">Confirmar su Teléfono:</label>
                         <input id="phone2" type="text"   placeholder="Confirmar su teléfono" value="" class="form-control input-dis" />
                    </div>
     
                    <div class="col_half ">
                         <label for="register-form-name">Monto:</label>
                         <select id="monto" class="form-control input-dis ">
                              <option selected>Monto...</option>
                              <option value="50">$ 50</option>
                              <option value="60">$ 60</option>
                              <option value="69">$ 69</option>
                              <option value="80">$ 80</option>
                              <option value="99">$ 99</option>
                              <option value="100">$ 100</option>
                              <option value="199">$ 199</option>
                              <option value="200">$ 200</option>
                              <option value="299">$ 299</option>
                              <option value="300">$ 300</option>
                              <option value="499">$ 499</option>
                              <option value="500">$ 500</option>
                         </select>
                    </div>
       
                 </form>
                 <br>
                 <div class="" >
                     <button id="recargar"  class="btn btn-primary recharge">Enviar</button>
                 </div>
          </div>
      </div>
  </section>
@stop

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">
     $('.recharge').click(function(){
          let name = $('#nombre').val();
          let correo = $('#correo').val();
          let phone = $('#phone').val();
          let phone_valida = $('#phone2').val();
          let monto = $('#monto').val();
          
          if (name == "") {
          // alert("El Campo Nombre es Obligatorio");
          // return false;
               Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'El Campo Nombre es Obligatorio.',
                         showConfirmButton: true,
                         // timer: 2000
                    });
               return false;
          }

          if (monto == 0) {
               // alert("Debe seleccionar un monto");
               // return false;
               Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Debe seleccionar un monto.',
                         showConfirmButton: true,
                         // timer: 2000
                    });
                    return false;
          }
          if (phone == "") {
               // alert("Los Campos de Teléfono son Obligatorios");
               // return false;
               Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Los Campos de Teléfono son Obligatorios.',
                         showConfirmButton: true,
                         // timer: 2000
                    });
                    return false;
          }
          if (phone != phone_valida) {
               // alert("Los Números deben ser iguales");
               // return false;
               Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Los Números deben ser iguales.',
                         showConfirmButton: true,
                         // timer: 2000
                    });
                    return false;
          }

          if (correo == '') {
               // alert("Debe escribir un correo válido");
               // return false;
               Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Debe escribir un correo válido.',
                         showConfirmButton: true,
                         // timer: 2000
                    });
                    return false;
          }
          
          //ajax original
          // $.ajax({
          //      url: "{{route('validPhone')}}",
          //      type: 'GET',
          //      data: {phone:phone, monto:monto, name:name, correo:correo},
          //      success: function(response){
          //           if (response == 1) {
          //                Swal.fire({
          //                     icon: 'error',
          //                     title: 'Oops...',
          //                     text: 'Por favor introduzca un número Altcel.',
          //                     showConfirmButton: true,
          //                     // timer: 2000
          //                });
          //           }else{
          //                console.log(response)
          //                return false;
          //           }
          //      }
          // })
          
          newwindow=window.open('card?telefono='+phone+'&monto='+monto+'&email='+correo+'&nombre='+nombre,'Recargas','height=800,width=800');
          

     })

  </script>
@stop
