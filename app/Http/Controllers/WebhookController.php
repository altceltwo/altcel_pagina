<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DB;

class WebhookController extends Controller
{
    //

    public function notificationWHk(Request $request){
        // return json_decode($request) ;
        $data = $request->data;

        $id = $request->data;

        $customber_info = $data['object']['customer_info'];
        $amount = $data['object']['amount'];
        $order_id = $data['object']['id'];
        $status = $data['object']['payment_status'];
        
        return $data ;
    }
}
