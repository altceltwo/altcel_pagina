<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Conekta\ConektaPayment;

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
            $x = $this->ConektaPayment->createPaymentLink($request);
        }else {
            return 1;
        }
        
        return $x;
    }   
}
