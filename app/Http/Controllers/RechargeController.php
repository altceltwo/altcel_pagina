<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Conekta\ConektaPayment;
use DB;
use App\Models\Cobro;
use App\Models\Recharge;

class RechargeController extends Controller
{
    protected $ConektaPayment;

    function __construct(){
        $this->ConektaPayment = new ConektaPayment();
    }
      public function rechargeWeb(Request $request){
        $phone = $request->get('phone');
        $name = $request->get('name');
        $monto = $request->get('monto');
        $correo = $request->get('correo');

        $phoneT = '52'.$phone;
        // return $phoneT;
        $responseUnbarring = Http::withHeaders([
            'Content-type' => 'application/json'
        ])->post('http://187.217.216.242/webhook/appUser',[
            'client_phone' => $phoneT,
        ]);
        // return $responseUnbarring;
        if ($responseUnbarring['planUser'] != null) {
            // $x = $this->ConektaPayment->createPaymentLink($request);
            $x = $this->ConektaPayment->checkout($request);
        }else {
            $responseUnbarring = Http::withHeaders([
                'Content-type' => 'application/json'
            ])->post('http://187.217.216.244/appUser',[
                'client_msisdn' => $phone,
            ]);

            if ($responseUnbarring['dataUser']['exists'] == 1) {
                return 'A2';
            }

        }
        
        return $x;
    } 
    
    public function tarjetaNoreste(Request $request){
        $status = $request['status'];
        $order_id = $request['order_id'];
        $phone = $request['phone'];
        $monto =  $request['monto'];
        // return $request;
        Recharge::insert([
            "order_id" =>$order_id,
            "phone" => $phone,
            "amount"=> $monto,
            "status"=> $status
       ]);

        $data['role'] = "danger";
        $r = "";
        $data['tel'] = $request['phone'];
        // return $data['qty'];
        $data['qty'] = $request['monto'];
        $diahora = date('d/m/Y H:i:s');
        $TransNumber = rand ( 1 , 99999 );
        $DescripcionCode = "";
        $DateTime = $diahora;
        $AutoNo = 0;
        $Instr1 = "Su tarjeta no ha sido afectada con ningun cargo.";
        $Instr2 = "";

        switch ($data['qty']) {
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

        $string = "<ReloadRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".$sku."</SKU><PhoneNumber>".$data['tel']."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></ReloadRequest>";
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
            $data['role'] = "success";
            } else {
            $data['role'] = "danger";
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
            $data['role'] = "success";
            } else {
            $data['role'] = "danger";
            }
        } elseif($ResponseCode == 35 || $ResponseCode == 65 || $ResponseCode == 66 || $ResponseCode == 67 || $ResponseCode == 70 || $ResponseCode == 72 ||      $ResponseCode == 87 || $ResponseCode == 88 || $ResponseCode == 91 || $ResponseCode == 92 || $ResponseCode == 93 || $ResponseCode == 96 || $ResponseCode == 98 || $ResponseCode == 99 || $ResponseCode == 4 ){
                $data['role'] = "danger";
        }else {
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
            $data['role'] = "success";
            } else {
            $data['role'] = "danger";
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

        return $data;
    }
}
