<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mail\NewDealer;
use Illuminate\Support\Facades\Mail;

class DealerController extends Controller
{
    public function newDealer(Request $request){
        // return $request;
        $name = $request->get('name');
        $phone = $request->get('phone');
        $city = $request->get('city');
        $email = $request->get('email');

        $emails = ['c.banda07@hotmail.com','carlitosba0717@gmail.com'];
        $data = [
            "subject"=>"SOLICITUD DE DISTRIBUIDOR NUEVO",
            "name"=>$name,
            "phone"=>$phone,
            "city"=>$city,
            "email"=>$email,
            "body"=>'Hola,'.$emails[0].' y '.$emails[1].' tiene una nueva solicitud para agregar un nuevo distribuidor con los siguientes datos:'
        ];
        Mail::to($emails[0])->send(new NewDealer($data));
        Mail::to($emails[1])->send(new NewDealer($data));
        return response()->json(['http_code'=>'200','message'=>'Correo Enviado...']);
    }

    public function pegaPhone(Request $request){
        return $request;
    }

    // public function validatePhone(Request $request){
    //     $phone = $request->get('phone');
    //     $name = $request->get('name');
    //     $monto = $request->get('monto');
    //     $correo = $request->get('correo');
    //     $diahora = date('d/m/Y H:i:s');
    //     $TransNumber = rand ( 1 , 99999 );

    //     $string = "<ReloadRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".'6576840100108'."</SKU><PhoneNumber>".$phone."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></ReloadRequest>";

    //     $response = Http::withHeaders([
    //         'Content-type' => 'text/xml; charset=UTF8',
    //         'Accept' => 'application/xml'
    //     ])->get('http://tndesarollo.com/Altcel_WS/ServicePX.asmx/getReloadClass?sXML='.$string);


    //     return $response;

    // }
}
