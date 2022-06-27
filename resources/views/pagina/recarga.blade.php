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
                              <option value="10">$ 10</option>
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
  <div id="conektaIframeContainer" style="height: 700px;"></div>

  <div class="modal" id="modal-ticket" tabindex="-1" style="width: 50rem;; background-color:white;margin-left: 49rem;">
     <div class="content" style="margin: 5rem;">
          <div class="row justify-content-center">
            <div class="col-8 text-center">
              <img src="{{ asset('images/logo.png') }}" width="130px" alt="">
              <br>
              <br>
              <div class="alert " role="alert">
                <b id="description"></b>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-8">
              <table class="table">
                <tr>
                  <td>Fecha y Hora:</td>
                  <td id="date_ticket"></td>
                </tr>
                <tr>
                  <td># de transacción:</td>
                  <td id="transa"></td>
                </tr>
                <tr>
                  <td># de Autorización:</td>
                  <td id="autorization"></td>
                </tr>
                <tr>
                  <td>Monto de la Recarga:</td>
                  <td id="amount_ticket">$ </td>
                </tr>
                <tr>
                  <td>Teléfono:</td>
                  <td id="phone_ticket"></td>
                </tr>
                <tr>
                  <td width="45%">Observaciones:</td>
                  <td class="text-justify" id="observation"></td>
                </tr>
                <tr class="no-print d-print-none">
                  <td class="text-center"><button class="btn btn-primary" onclick="myFunction()">Imprimir</button></td>
                  <td class="text-center"><button class="btn btn-danger" data-dismiss="modal">Cerrar</button></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
  </div>
@stop

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://pay.conekta.com/v1.0/js/conekta-checkout.min.js"></script>
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
          
          //ajax original para coneckta
          $.ajax({
               url: "{{route('validPhone')}}",
               type: 'GET',
               data: {phone:phone, monto:monto, name:name, correo:correo},
               success: function(response){
                    if (response == 1) {
                         Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: 'Por favor introduzca un número Altcel.',
                              showConfirmButton: true,
                              // timer: 2000
                         });
                    }else{
                         // console.log(response.checkout.id)
                         // return false;
                         var checkoutRequestId = response.checkout.id;
                         window.ConektaCheckoutComponents.Integration({
                              targetIFrame: "#conektaIframeContainer",
                              checkoutRequestId: checkoutRequestId, // checkout request id
                              publicKey: "key_KUxx4Sd9v8RiryYp27quVVA",
                              options: {},
                              styles: {},
                              onFinalizePayment: function(event){
                                   let status = event.charge.status;
                                   let order_id = event.id
                                   console.log(status);
                                   console.log(event,'MI EVENTO');
                              
                                   if (status == 'paid') {
                                        Swal.fire({
                                             title: 'Estamos realizando su recarga...',
                                             html: 'Espera un poco, por favor...',
                                             timerProgressBar: true,
                                             didOpen: () => {
                                                  $.ajax({
                                                       url: "{{route('tarNor')}}",
                                                       type: 'GET',
                                                       data: {phone:phone, monto:monto, status:status, order_id:order_id},
                                                       success: function(response){
                                                            Swal.close();

                                                            let AutoNo = response.AutoNo;
                                                            let DateTime = response.DateTime;
                                                            let DescripcionCode = response.DescripcionCode;
                                                            let Instr1 = response.Instr1;
                                                            let Instr2 = response.Instr2;
                                                            let TransNumber = response.TransNumber;
                                                            let cod = response.cod;
                                                            let qty = response.qty;
                                                            let role = response.role;
                                                            let tel = response.tel;
                                                            
                                                            $('#phone_ticket').html(tel);
                                                            $('#amount_ticket').html(qty);
                                                            $('#autorization').html(AutoNo);
                                                            $('#transa').html(TransNumber);
                                                            $('#date_ticket').html(DateTime);
                                                            $('#observation').html(Instr1+'<br>'+ '<br>'+ Instr2);
                                                            $('#description').html(DescripcionCode);
                                                            $('#alert').addClass('alert-'+role);

                                                            $("#modal-ticket").modal("show");
                                                            console.log(response)
                                                            // return false;
                                                       }
                                                  })
                                             }
                                        })
                                        
                                   }
                              }
                         })
                    }
               }
          })
          
          // newwindow=window.open('card?telefono='+phone+'&monto='+monto+'&email='+correo+'&nombre='+name,'Recargas','height=800,width=800');
          

     })
     function myFunction() {
      window.print();
    }
    function closeMe()
    {
      window.opener = self;
      window.close();
    }
  </script>
@stop
