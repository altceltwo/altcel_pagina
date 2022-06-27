<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Comprobante {{ $cod }}</title>
  </head>
  <body>
    <div class="content">
      <div class="row justify-content-center">
        <div class="col-8 text-center">
          <img src="{{ asset('images/logo.png') }}" width="130px" alt="">
          <br>
          <br>
          <div class="alert alert-{{ $role }}" role="alert">
            <b>{!! $DescripcionCode !!}</b>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-8">
          <table class="table">
            <tr>
              <td>Fecha y Hora:</td>
              <td>{!! $DateTime !!}</td>
            </tr>
            <tr>
              <td># de transacción:</td>
              <td>{!! $TransNumber !!}</td>
            </tr>
            <tr>
              <td># de Autorización:</td>
              <td>{!! $AutoNo !!}</td>
            </tr>
            <tr>
              <td>Monto de la Recarga:</td>
              <td>$ {!! number_format($qty,2,'.',',') !!}</td>
            </tr>
            <tr>
              <td>Teléfono:</td>
              <td>{!! $tel !!}</td>
            </tr>
            <tr>
              <td width="45%">Observaciones:</td>
              <td class="text-justify">{!! $Instr1 !!} <br> <br> {!! $Instr2 !!}</td>
            </tr>
            @if ($cod!= 0)
              <!--<tr>
                <td width="45%">¡¡¡ FELICIDADES !!!:</td>
                <td class="text-justify">TU CÓDIGO GANADOR ES EL <b>{{-- $cod --}}</b>. LLAMA AL *282 DESDE TU LÍNEA ALTCEL PARA CANJEARLO POR SALDO.</td>
              </tr>-->
            @endif
            <tr class="no-print d-print-none">
              <td class="text-center"><button class="btn btn-primary" onclick="myFunction()">Imprimir</button></td>
              <td class="text-center"><button class="btn btn-danger" onclick="closeMe()">Cerrar</button></td>
            </tr>
          </table>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
    function myFunction() {
      window.print();
    }
    function closeMe()
    {
      window.opener = self;
      window.close();
    }
    </script>
  </body>
</html>
