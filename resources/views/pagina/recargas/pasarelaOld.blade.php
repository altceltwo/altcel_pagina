<?php
// echo $role = "danger";
// echo $tel = $_POST['telefono'];
// echo $qty = $_POST['monto'];
// $diahora = date('d/m/Y H:i:s');
// echo $TransNumber = rand ( 1 , 99999 );
// $DescripcionCode = "";
// echo $DateTime = $diahora;
// echo $AutoNo = 0;
// echo $Instr1 = "Su tarjeta no ha sido afectada con ningun cargo.";
// echo $Instr2 = "";
// return false;
require_once '../vendor/autoload.php';

require('../vendor/openpay/sdk/Openpay.php');
// use Openpay;


//sandbox
$openpay = Openpay::getInstance('mknobtk1h9tlibxadf7s', 'sk_c6d1e49513964b879701552d948e29cc');

//produccion
// $openpay = Openpay::getInstance('mx6hwd1zsacnw4mqbpca', 'sk_ebc33028470b462388e2382137c13312');

// dump(Input::all());
$role = "danger";
$tel = $_POST['telefono'];
$qty = $_POST['monto'];
$diahora = date('d/m/Y H:i:s');
$TransNumber = rand ( 1 , 99999 );
$DescripcionCode = "";
$DateTime = $diahora;
$AutoNo = 0;
$Instr1 = "Su tarjeta no ha sido afectada con ningun cargo.";
$Instr2 = "";

// return $tel;


$cod = 0;

$customer = array(
     'name' => $_POST['nombre'],
     'last_name' => '',
     'phone_number' => $_POST["telefono"],
     'email' => $_POST["email"],);

$chargeData = array(
    'method' => 'card',
    'source_id' => $_POST["token_id"],
    'amount' => (float)$_POST["monto"],
    'description' => 'Pago en linea-'.$TransNumber,
    'device_session_id' => $_POST["deviceIdHiddenFieldName"],
    'customer' => $customer
    );


try{

  $charge = $openpay->charges->create($chargeData);
} catch (OpenpayApiTransactionError $e) {
  $error = error_log('ERROR on the transaction: ' . $e->getMessage() .
        ' [error code: ' . $e->getErrorCode() .
        ', error category: ' . $e->getCategory() .
        ', HTTP code: '. $e->getHttpCode() .
        ', request ID: ' . $e->getRequestId() . ']', 0);

} catch (OpenpayApiRequestError $e) {
  $error = error_log('ERROR on the request: ' . $e->getMessage(), 0);

} catch (OpenpayApiConnectionError $e) {
  $error = error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);

} catch (OpenpayApiAuthError $e) {
  $error = error_log('ERROR on the authentication: ' . $e->getMessage(), 0);

} catch (OpenpayApiError $e) {
  $error = error_log('ERROR on the API: ' . $e->getMessage(), 0);

} catch (Exception $e) {
  $error = error_log('Error on the script: ' . $e->getMessage(), 0);
}

if (isset($e)) {

  switch ($e->getErrorCode()) {
    case 3001:
      $DescripcionCode = "La tarjeta fue declinada.";
      break;
    case 3002:
      $DescripcionCode = "La tarjeta ha expirado.";
      break;
    case 3003:
      $DescripcionCode = "La tarjeta no tiene fondos suficientes.";
      break;
    case 3004:
      $DescripcionCode = "La tarjeta ha sido identificada como una tarjeta robada.";
      break;
    case 3005:
      $DescripcionCode = "La tarjeta ha sido rechazada por el sistema antifraudes.";
      break;
    case 3006:
      $DescripcionCode = "La operación no esta permitida para este cliente o esta transacción.";
      break;
    case 3007:
      $DescripcionCode = "Deprecado. La tarjeta fue declinada.";
      break;
    case 3008:
      $DescripcionCode = "La tarjeta no es soportada en transacciones en línea.";
      break;
    case 3009:
      $DescripcionCode = "La tarjeta fue reportada como perdida.";
      break;
    case 3010:
      $DescripcionCode = "El banco ha restringido la tarjeta.";
      break;
    case 3011:
      $DescripcionCode = "El banco ha solicitado que la tarjeta sea retenida. Contacte al banco.";
      break;
    case 3012:
      $DescripcionCode = "Se requiere solicitar al banco autorización para realizar este pago.";
      break;

    default:
      $DescripcionCode = "El servicio respondio con errores.";
      break;
  }


} else {

  switch ($_POST['monto']) {
    case 10:
      $sku = '6576840100108';
      break;
    case 20:
      $sku = '6576840100205';
      break;
    case 30:
      $sku = '6576840100302';
      break;
    case 40:
      $sku = '6576840100409';
      break;
    case 50:
      $sku = '6576840100506';
      break;
    case 60:
      $sku = '6576840100603';
      break;
    case 80:
      $sku = '6576840100807';
      break;
    case 100:
      $sku = '6576840101000';
      break;
    case 200:
      $sku = '6576840102009';
      break;
    case 300:
      $sku = '6576840103008';
      break;
    case 500:
      $sku = '6576840105006';
      break;
    case 69:
      $sku = '6576840100694';
      break;
    case 99:
      $sku = '6576840100995';
      break;
    case 199:
      $sku = '6576840101994';
      break;
    case 210:
      $sku = '6576840102106';
      break;
    case 229:
      $sku = '6576840102294';
      break;
    case 255:
      $sku = '6576840102558';
      break;
    case 299:
      $sku = '6576840102993';
      break;
    case 320:
      $sku = '6576840103202';
      break;
    case 399:
      $sku = '6576840103992';
      break;
    case 425:
      $sku = '6576840104256';
      break;
    case 499:
      $sku = '6576840104991';
      break;
    case 550:
      $sku = '6576840105501';
      break;
    case 699:
      $sku = '6576840106999';
      break;
    case 1499:
      $sku = '6576840114998';
      break;
    default:
      $sku = '0000000000000';
  }

  $TransNumber = $TransNumber;

  $cobro = App\Models\Cobro::create([
    'datetime' => $diahora,
    'transnumber' => $TransNumber,
    'phonenumber' => $tel,
    'qty' => $qty
  ]);

  $id = $cobro->id;

  //URL Produccion
  //https://mvno1.tnoreste.com/Altcel_WS/

  //URL Pruebas
  //http://tndesarollo.com/WS_ALTCEL/

  $string = "<ReloadRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".$sku."</SKU><PhoneNumber>".$tel."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></ReloadRequest>";
  $url = 'https://tndesarollo.com/WS_ALTCEL/ServicePX.asmx/getReloadClass?sXML='.($string);


  // $client = new \GuzzleHttp\Client();
  try {
    $response = $client->request(
      'GET',
      (($url)),
      [
        'headers' => [
          'Content-Type' => 'text/xml; charset=UTF8',
          'Accept' => 'application/xml'
        ],
        'timeout' => 50
      ])->getBody()->getContents();
  } catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  }

  echo $response;
return false;



  //$responseXml = simplexml_load_string($response);

  function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
  }

  if(isset($response)){
    $ResponseCode = get_string_between(htmlspecialchars_decode($response), '<ResponseCode>', '</ResponseCode>');
  } else {
    $ResponseCode = '5';
    $response = 'no';
  }

  /*echo "Petición";
  dump($url);

  echo "Respuesta TN";
  dump(htmlspecialchars_decode($response));*/

  /*dump($Instr1);
  dump($Instr2);
  dump($ResponseCode);
  dump($DescripcionCode);
  dump($DateTime);
  dump($TransNumber);
  dump($AutoNo);*/

  if ($ResponseCode == 0) {
    $role = "success";
  } elseif ($ResponseCode == 6) {
    sleep(5);
    $string = "<QueryRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".$sku."</SKU><PhoneNumber>".$tel."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></QueryRequest>";
    $url = 'https://mvno1.tnoreste.com/Altcel_WS/ServicePX.asmx/getQueryClass?sXML='.($string);
    $client = new \GuzzleHttp\Client();
    $response = $client->request(
      'GET',
      (($url)),
      [
        'headers' => [
          'Content-Type' => 'text/xml; charset=UTF8',
          'Accept' => 'application/xml'
        ],
        'timeout' => 50
      ])->getBody()->getContents();

    /*echo "Petición Consulta";
    dump($url);

    echo "Respuesta Consulta TN";
    dump(htmlspecialchars_decode($response));*/

    $ResponseCode = get_string_between(htmlspecialchars_decode($response), '<ResponseCode>', '</ResponseCode>');
    if ($ResponseCode == 0) {
      $role = "success";
    } else {
      $role = "danger";
    }
  } elseif ($ResponseCode == 71) {
    sleep(5);
    $string = "<QueryRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".$sku."</SKU><PhoneNumber>".$tel."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></QueryRequest>";
    $url = 'https://mvno1.tnoreste.com/Altcel_WS/ServicePX.asmx/getQueryClass?sXML='.($string);
    $client = new \GuzzleHttp\Client();
    $response = $client->request(
      'GET',
      (($url)),
      [
        'headers' => [
          'Content-Type' => 'text/xml; charset=UTF8',
          'Accept' => 'application/xml'
        ],
        'timeout' => 50
      ])->getBody()->getContents();

    /*echo "Petición Consulta";
    dump($url);
    echo "Respuesta Consulta TN";
    dump(htmlspecialchars_decode($response));*/

    $ResponseCode = get_string_between(htmlspecialchars_decode($response), '<ResponseCode>', '</ResponseCode>');
    if ($ResponseCode == 0) {
      $role = "success";
    } else {
      $role = "danger";
    }
  } elseif($ResponseCode == 35 || $ResponseCode == 65 || $ResponseCode == 66 || $ResponseCode == 67 || $ResponseCode == 70 || $ResponseCode == 72 || $ResponseCode == 87 || $ResponseCode == 88 || $ResponseCode == 91 || $ResponseCode == 92 || $ResponseCode == 93 || $ResponseCode == 96 || $ResponseCode == 98 || $ResponseCode == 99 || $ResponseCode == 4 ){
    $role = "danger";
  } else {
    sleep(5);
    $string = "<QueryRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".$sku."</SKU><PhoneNumber>".$tel."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></QueryRequest>";
    $url = 'https://mvno1.tnoreste.com/Altcel_WS/ServicePX.asmx/getQueryClass?sXML='.($string);
    
    $client = new \GuzzleHttp\Client();
    $response = $client->request(
      'GET',
      (($url)),
      [
        'headers' => [
          'Content-Type' => 'text/xml; charset=UTF8',
          'Accept' => 'application/xml'
        ],
        'timeout' => 50
      ])->getBody()->getContents();

    /*echo "Petición Consulta";
    dump($url);
    echo "Respuesta Consulta TN";
    dump(htmlspecialchars_decode($response));*/

    $ResponseCode = get_string_between(htmlspecialchars_decode($response), '<ResponseCode>', '</ResponseCode>');
    if ($ResponseCode == 0) {
      $role = "success";
    } else {
      $role = "danger";
    }
  }
  $cod = "";
  if ($response != 'no') {
    $Instr1 = get_string_between(htmlspecialchars_decode($response), '<Instr1>', '</Instr1>');
    $Instr2 = get_string_between(htmlspecialchars_decode($response), '<Instr2>', '</Instr2>');
    $DescripcionCode = get_string_between(htmlspecialchars_decode($response), '<DescripcionCode>', '</DescripcionCode>');
    $DateTime = get_string_between(htmlspecialchars_decode($response), '<DateTime>', '</DateTime>');
    $TransNumber = get_string_between(htmlspecialchars_decode($response), '<TransNumber>', '</TransNumber>');
    $AutoNo = get_string_between(htmlspecialchars_decode($response), '<AutoNo>', '</AutoNo>');

    $codigo = App\Codigo::inRandomOrder()->where('telefono',null)->first();

    //dd($codigo->codigo);
    $cod = $codigo->codigo;
    $codigoUpdated = App\Codigo::find($codigo->id)->update(['telefono'=>$tel]);

    //foreach ($codigos as $codig){
    //}
  }

  /*dump($Instr1);
  dump($Instr2);
  dump($ResponseCode);
  dump($DescripcionCode);
  dump($DateTime);
  dump($TransNumber);
  dump($AutoNo);*/

  $cobro = App\Cobro::find($id);

  $cobro->fill([
    'autono' => $AutoNo,
    'responsecode' => $ResponseCode,
    'descriptioncode' => $DescripcionCode
  ]);

  $cobro->save();
}
?>

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
            @if ($cod != 0)
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
