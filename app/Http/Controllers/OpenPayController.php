<?php

namespace App\Http\Controllers;
use Openpay\Data\Openpay as Openpay;
use DB;
use App\Models\Cobro;
use App\Models\Codigo;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

require_once '../vendor/autoload.php';

class OpenPayController extends Controller
{
    public function cardPayment(Request $request){
        // return $request;
         //sandbox
        // $openpay = Openpay::getInstance('mvtmmoafnxul8oizkhju', 'sk_e69bbf5d1e30448688b24670bcef1743');

        //produccion
        $openpay = Openpay::getInstance('mx6hwd1zsacnw4mqbpca', 'sk_ebc33028470b462388e2382137c13312');

        // Openpay::setProductionMode(false);
        Openpay::setProductionMode(true);

        // dump(Input::all());
        $role = "danger";
        $r = "";
        $data['tel'] = $request['telefono'];
        // return $tel;
        $data['qty'] = $request['monto'];
        $diahora = date('d/m/Y H:i:s');
        $TransNumber = rand ( 1 , 99999 );
        $DescripcionCode = "";
        $DateTime = $diahora;
        $AutoNo = 0;
        $Instr1 = "Su tarjeta no ha sido afectada con ningun cargo.";
        $Instr2 = "";

        // return $tel;


        $dcod = 0;

        $customer = array(
            'name' => $request['nombre'],
            'last_name' => '',
            'phone_number' => $request["telefono"],
            'email' => $request["email"],);
        
        $chargeData = array(
            'method' => 'card',
            'source_id' => $request["token_id"],
            // 'amount' => (float)$request["monto"],
            'amount' => $request["monto"],
            'description' => 'Pago en linea-'.$TransNumber,
            'device_session_id' => $request["deviceIdHiddenFieldName"],
            'customer' => $customer
            );
            
        try{
            
            $charge = $openpay->charges->create($chargeData);
            $x['dataCharge']['id'] = $charge->id;
            $x['dataCharge']['status'] = $charge->status;
            $x['dataCharge']['error_code'] = $charge->error_code;
            // return $x['dataCharge']['status'];
            // return false;
            $x['dataCharge']['authorization'] = $charge->authorization;
            $x['dataCharge']['operation_date'] = $charge->operation_date;
            $x['dataCharge']['description'] = $charge->description;
            
        }catch (OpenpayApiTransactionError $e) {
            $r = $e;
            error_log('ERROR on the transaction: ' . $e->getMessage() . 
            ' [error code: ' . $e->getErrorCode() . 
            ', error category: ' . $e->getCategory() . 
            ', HTTP code: '. $e->getHttpCode() . 
            ', request ID: ' . $e->getRequestId() . ']', 0);

        } catch (OpenpayApiRequestError $e) {
            $r = $e;
        error_log('ERROR on the request: ' . $e->getMessage(), 0);

        } catch (OpenpayApiConnectionError $e) {
            $r = $e;
        error_log('ERROR while connecting to the API: ' . $e->getMessage(), 0);

        } catch (OpenpayApiAuthError $e) {
            $r = $e;
        error_log('ERROR on the authentication: ' . $e->getMessage(), 0);

        } catch (OpenpayApiError $e) {
            $r = $e;
        error_log('ERROR on the API: ' . $e->getMessage(), 0);

        } catch (Exception $e) {
            $r = $e;
        error_log('Error on the script: ' . $e->getMessage(), 0);
        }
        // $data['DescripcionCode'] = $e;
        return $r;

        if (isset($e)) {

            switch ($e->getErrorCode()) {
                case 3001:
                $data['DescripcionCode'] = "La tarjeta fue declinada.";
                break;
                case 3002:
                $data['DescripcionCode'] = "La tarjeta ha expirado.";
                break;
                case 3003:
                $data['DescripcionCode'] = "La tarjeta no tiene fondos suficientes.";
                break;
                case 3004:
                $data['DescripcionCode'] = "La tarjeta ha sido identificada como una tarjeta robada.";
                break;
                case 3005:
                $data['DescripcionCode'] = "La tarjeta ha sido rechazada por el sistema antifraudes.";
                break;
                case 3006:
                $data['DescripcionCode'] = "La operación no esta permitida para este cliente o esta transacción.";
                break;
                case 3007:
                $data['DescripcionCode'] = "Deprecado. La tarjeta fue declinada.";
                break;
                case 3008:
                $data['DescripcionCode'] = "La tarjeta no es soportada en transacciones en línea.";
                break;
                case 3009:
                $data['DescripcionCode'] = "La tarjeta fue reportada como perdida.";
                break;
                case 3010:
                $data['DescripcionCode'] = "El banco ha restringido la tarjeta.";
                break;
                case 3011:
                $data['DescripcionCode'] = "El banco ha solicitado que la tarjeta sea retenida. Contacte al banco.";
                break;
                case 3012:
                $data['DescripcionCode'] = "Se requiere solicitar al banco autorización para realizar este pago.";
                break;

                default:
                $data['DescripcionCode'] = "El servicio respondio con errores.";
                break;
            }

        }

        if ($x['dataCharge']['status'] == 'failed') {
            return 'EROR';
        }else{
            switch ($request['monto']) {
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

            if ($x['dataCharge']['status'] == 'completed') {
                $TransNumber = $TransNumber;
                $cobro = Cobro::create([
                    'datetime' => $diahora,
                    'transnumber' => $TransNumber,
                    'phonenumber' => $data['tel'],
                    'qty' => $data['qty']
                ]);

                $id = $cobro->id;
                //URL Produccion
                //https://mvno1.tnoreste.com/Altcel_WS/

                //URL Pruebas
                //http://tndesarollo.com/WS_ALTCEL/

                $string = "<ReloadRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".'6576840100108'."</SKU><PhoneNumber>".$data['tel']."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></ReloadRequest>";
                $url = 'https://mvno1.tnoreste.com/Altcel_WS/ServicePX.asmx/getReloadClass?sXML='.($string);
                // return $url;


                try {
                    $response = Http::withHeaders([
                        'Content-Type' => 'text/xml; charset=UTF8',
                        'Accept' => 'application/xml',
                        'timeout' => 50
                    ])->get($url)->getBody()->getContents();
                    // return $response;
                } catch (Exception $e) {
                    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                }
                

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


                if ($ResponseCode == 0) {
                    $data['role'] = "success";
                }elseif ($ResponseCode == 6) {
                    sleep(5);
                    $string = "<QueryRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".$sku."</SKU><PhoneNumber>".$data['tel']."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></QueryRequest>";
                    $url = 'https://mvno1.tnoreste.com/Altcel_WS/ServicePX.asmx/getQueryClass?sXML='.($string);
                    //aqui va codigo antiguo de peticion
        
                    $response = Http::withHeaders([
                        'Content-Type' => 'text/xml; charset=UTF8',
                        'Accept' => 'application/xml',
                        'timeout' => 50
                    ])->get($url)->getBody()->getContents();
        
                    $ResponseCode = get_string_between(htmlspecialchars_decode($response), '<ResponseCode>', '</ResponseCode>');
                    if ($ResponseCode == 0) {
                    $role = "success";
                    } else {
                    $role = "danger";
                    }
                }elseif ($ResponseCode == 71) {
                    sleep(5);
                    $string = "<QueryRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".$sku."</SKU><PhoneNumber>".$data['tel']."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></QueryRequest>";
                    $url = 'https://mvno1.tnoreste.com/Altcel_WS/ServicePX.asmx/getQueryClass?sXML='.($string);
        
                    //aqui va codigo antiguo de peticion
        
                    $response = Http::withHeaders([
                        'Content-Type' => 'text/xml; charset=UTF8',
                        'Accept' => 'application/xml',
                        'timeout' => 50
                    ])->get($url)->getBody()->getContents();
        
                    $ResponseCode = get_string_between(htmlspecialchars_decode($response), '<ResponseCode>', '</ResponseCode>');
                    if ($ResponseCode == 0) {
                    $role = "success";
                    } else {
                    $role = "danger";
                    }
                } elseif($ResponseCode == 35 || $ResponseCode == 65 || $ResponseCode == 66 || $ResponseCode == 67 || $ResponseCode == 70 || $ResponseCode == 72 ||      $ResponseCode == 87 || $ResponseCode == 88 || $ResponseCode == 91 || $ResponseCode == 92 || $ResponseCode == 93 || $ResponseCode == 96 || $ResponseCode == 98 || $ResponseCode == 99 || $ResponseCode == 4 ){
                        $role = "danger";
                }else {
                    sleep(5);
                    $string = "<QueryRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".$sku."</SKU><PhoneNumber>".$tel."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></QueryRequest>";
                    $url = 'https://mvno1.tnoreste.com/Altcel_WS/ServicePX.asmx/getQueryClass?sXML='.($string);
                    
                    //aqui va codigo antiguo de peticion
            
                    $response = Http::withHeaders([
                        'Content-Type' => 'text/xml; charset=UTF8',
                        'Accept' => 'application/xml',
                        'timeout' => 50
                    ])->get($url)->getBody()->getContents();
            
            
                    $ResponseCode = get_string_between(htmlspecialchars_decode($response), '<ResponseCode>', '</ResponseCode>');
                    if ($ResponseCode == 0) {
                    $role = "success";
                    } else {
                    $role = "danger";
                    }
                }

                $data['cod'] = "";
                if ($response != 'no') {
                    
                    $data['Instr1'] = get_string_between(htmlspecialchars_decode($response), '<Instr1>', '</Instr1>');
                    $data['Instr2'] = get_string_between(htmlspecialchars_decode($response), '<Instr2>', '</Instr2>');
                    $data['DescripcionCode'] = get_string_between(htmlspecialchars_decode($response), '<DescripcionCode>', '</DescripcionCode>');
                    $data['DateTime'] = get_string_between(htmlspecialchars_decode($response), '<DateTime>', '</DateTime>');
                    $data['TransNumber'] = get_string_between(htmlspecialchars_decode($response), '<TransNumber>', '</TransNumber>');
                    $data['AutoNo'] = get_string_between(htmlspecialchars_decode($response), '<AutoNo>', '</AutoNo>');
                    // return $data;
                    // $codigo = Codigo::inRandomOrder()->where('telefono',null)->first();
                    // return $codigo;
                    // //dd($codigo->codigo);
                    // $data['cod'] = $codigo->codigo;
                    // $codigoUpdated = Codigo::find($codigo->id)->update(['telefono'=>$data['tel']]);

                    //foreach ($codigos as $codig){
                    //}
                    
                }

                $cobro = Cobro::find($id);

                $cobro->fill([
                    'autono' => $data['AutoNo'],
                    'responsecode' => $ResponseCode,
                    'descriptioncode' => $data['DescripcionCode']
                ]);

                $cobro->save();
            }

            // return $data;

            return view('pagina.recargas.pasarela',$data);
        }   
    }
   
}
