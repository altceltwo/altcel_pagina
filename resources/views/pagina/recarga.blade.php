@extends('layouts.master')

@section('content')
<div class="img-fon">
     <img class="img-cel__recarg" src="{!! asset('images/cell-recarg.png') !!}" alt="Altcel">
     <img class="img-barra1" src="{!! asset('images/barra1.png') !!}" alt="Altcel">
     <img class="img-barra2" src="{!! asset('images/barra2.png') !!}" alt="Altcel">
     <!-- Page Title 
  ============================================= -->

  <!-- <section style="margin-top: 30px" id="page-title" class="page-title-pattern soporteprincipal"> -->
     <section id="page-title" class="page-title-pattern soporteprincipal">
          <div class="container clearfix">
               <h1 class="text-recarg">Recargas</h1>
          </div>
     </section><!-- #page-title end -->
  <!-- Page Title
  ============================================= -->

     <section id="content" style="margin-bottom: 30px">
          <div>
               <div class="cardRecarga">
                    <!-- <fieldset> -->
                    <form id="register-form" style="text-align: center; margin: 50px" name="register-form" class="nobottommargin" id="dist" >
                    
                         
                    <div class="col_half camp_a">
                         
                         <!-- <label for="register-form-email">Nombre completo:</label> -->
                         <fieldset class="fiel_nombre">
                         <legend class="nombre_titular"><i class="fas fa-user"></i>Nombre:</legend>
                              <input id="nombre" type="text" placeholder="Su nombre" value="" class="form-control input-dis"/>
                         </fieldset>
                    </div>
                    <div class="col_half col_last mov_correo">
                              <!-- <label for="register-form-username">Correo electrónico:</label> -->
                              <fieldset class="fiel_nombre">
                              <legend class="email_titular"><i class="fa-solid fa-at"></i>Correo electrónico:</legend>
                              <input id="correo" type="email" placeholder="Su correo" value="" class="form-control input-dis"/>
                              </fieldset>
                         </div>
          
                         <div class="col_half col_last camp_b">
                              <!-- <label for="register-form-name">Teléfono:</label> -->
                              <fieldset class="fiel_nombre">
                              <legend class="nombre_titular"><i class="fa-solid fa-mobile"></i>Teléfono:</legend>
                              <input id="phone" name="phone" type="text" placeholder="Su teléfono" value="" class="form-control input-dis" />
                              </fieldset>
                         </div>
                    <div class="clear"></div>
          
          
                         <div class="col_half mov_conf__tel">
                              <!-- <label for="register-form-name">Confirmar su Teléfono:</label> -->
                              <fieldset class="fiel_nombre mov_conf__tel">
                                   <legend class="tel_conf_titular"><i class="fa-solid fa-check-double"></i>Confirmar su Teléfono:</legend>
                                   <input id="phone2" type="text"   placeholder="Confirmar su teléfono" value="" class="form-control input-dis" />
                              </fieldset>
                         </div>
          
                         <div class="col_half camp_c mov_monto">
                              <!-- <label for="register-form-name">Monto:</label> -->
                              <fieldset class="fiel_nombre">
                              <legend class="nombre_titular"><i class="fa-solid fa-sack-dollar"></i>Monto:</legend>
                              
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
                              </fieldset>
                         </div>
          
                    </form>
                    <br>
                    <div class="" >
                         <button id="recargar"  class="btn btn-primary recharge">Enviar</button>
                    </div>
                    <!-- </fieldset> -->
               </div>
          </div>
     </section>
</div>
@stop

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript">

     // $('#phone').inputmask("(999) 999-9999");
     $(":input").inputmask();
     $("#phone").inputmask({"mask": "9999999999"}); //(999) 999-9999
     $("#phone2").inputmask({"mask": "9999999999"}); //(999) 999-9999



     $('.recharge').click(function(){
          let name = $('#nombre').val();
          let correo = $('#correo').val();
          let phone = $('#phone').val();
          let phone_valida = $('#phone2').val();
          let monto = $('#monto').val();


          emailval = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;


          
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
          if (!emailval.test(correo)) {
               Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: 'Ingresa un Correo valido.',
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
