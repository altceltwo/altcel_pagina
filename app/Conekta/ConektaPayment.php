<?php
namespace App\Conekta;
use Conekta\Conekta;
// use Http\WebhookController;
use App\Http\Controllers\WebhookController;
use Http;

class ConektaPayment{

     function __construct(){
          //Key prueba Altcel2
          // Conekta::setApiKey('key_qbK6zfeHtAHSXJxsMHciLw');

          //Key de prueba Altcel
          Conekta::setApiKey('key_ShYLEz3UBoXLpzupF83xaQ');
          //Key produccion
          // Conekta::setApiKey('key_duJxSBstM6rsGAqH3NLWkQ');
          Conekta::setApiVersion('2.0.0');

          // $this->Webhook = new WebhookController();
     }

     public function createPaymentLink($request){
          
          $webhook = new WebhookController();

          $phone = $request->get('phone');
          $name = $request->get('name');
          $nombre = trim($name);
          // return $nombre;
          $monto = $request->get('monto');
          $correo = $request->get('correo');
          // return $phone;
          try {
               $conekta_checkout = \Conekta\Checkout::create([ 
                  'name' => 'Recarga de saldo Altcel1',
                  'type' => "PaymentLink",
                  'recurrent' => false,
                  'expires_at' => (new \DateTime())->add(new \DateInterval('P5D'))->getTimestamp(),
                  'allowed_payment_methods' => ["card"],
                  'needs_shipping_contact' => false,
                  'monthly_installments_enabled' => false,
                  'order_template' => [
                    'line_items' => [[
                    'name' => 'Recarga de saldo ',
                    'unit_price' => $monto*100,
                    'quantity' => 1
                    ]],
                    'currency' => "MXN",
                    'customer_info' => [
                         'name' => $nombre,
                         'email' => $correo,
                         'phone' => $phone
                    ],
               ]
                    // 'metadata' => [
                    //     'client_id' => $phone,
                    // ]
               ]);

               if (isset($conekta_checkout -> id)) {
                    // $phone = $request->get('phone');
                    //     $name = $request->get('name');
                    //     $monto = $request->get('monto');
                    //     $correo = $request->get('correo');
                    // $diahora = date('d/m/Y H:i:s');
                    // $TransNumber = rand ( 1 , 99999 );
               
                    // $string = "<ReloadRequest><ID_GRP>1</ID_GRP><ID_CHAIN>2</ID_CHAIN><ID_MERCHANT>1</ID_MERCHANT><ID_POS>1</ID_POS><DateTime>".$diahora."</DateTime><SKU>".'6576840100108'."</SKU><PhoneNumber>".$phone."</PhoneNumber><TransNumber>".$TransNumber."</TransNumber><ID_COUNTRY>0</ID_COUNTRY><TC>0</TC></ReloadRequest>";
               
                    // $response = Http::withHeaders([
                    //      'Content-type' => 'text/xml; charset=UTF8',
                    //      'Accept' => 'application/xml'
                    // ])->get('http://tndesarollo.com/Altcel_WS/ServicePX.asmx/getReloadClass?sXML='.$string);
               
               
                    // return $response;

                    $order_id = $conekta_checkout->id;
                    $url = $conekta_checkout->url;

                    // $y = $this->Webhook->notificationWHk($order_id);
                    // $myVariable = $webhook->notificationWHk($order_id);
                    // return $myVariable;
               }
              
               return $conekta_checkout;
          }catch(\Conekta\ParameterValidationError $error){
               $err['code'] = $error->getCode();
               $err['message'] = $error->getMessage();
               return $err;
           }catch(\Conekta\Handler $error){
                return 1;
               $err['code'] = $error->getCode();
               $err['message'] = $error->getMessage();
               return $err;
           }
     }

     public function checkout($request){
          $phone = $request->get('phone');
          $name = $request->get('name');
          $nombre = trim($name);
          // return $nombre;
          $monto = $request->get('monto');
          $correo = $request->get('correo');

          $validCustomer = [
               'name' => $nombre,
               'email' => $correo,
               'phone' => $phone,
               'count' => $monto
          ];

          $customer = \Conekta\Customer::create($validCustomer);

          if (isset($customer -> id)) {

               $validOrderWithCheckout = array(
                    'line_items'=> array(
                      array(
                        'name'=> 'Recarga Altcel',
                        'description'=> 'Compra de Saldo Online',
                        'unit_price'=> $monto*100,
                        'quantity'=> 1,
                      )
                    ),
                    'checkout' => array(
                      'allowed_payment_methods' => array("card"),
                    ),
                    'customer_info' => array(
                      'customer_id'   =>  $customer -> id
                    ),
                    'currency'    => 'mxn'
                  );
               // return $validOrderWithCheckout;
               $order = \Conekta\Order::create($validOrderWithCheckout);
               return $order;
               
               return $order;
          }

          return $customer;
     }
}
