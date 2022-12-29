<?php

namespace App\Http\Controllers;
use Srmklive\PayPal\Services\ExpressCheckout;

use Illuminate\Http\Request;

class PaypalController extends Controller
{

       public function payement()
       {

          $data = [];

          $data['items'] = [
           
             [
                'name' => 'Apple',
                'price' => 100,
                'description' => 'Macbook pro 14 inch',
                'qte'=> 1,
             ]

          ];

          $data['invoice_id'] = 1;
          $data['invoice_description'] = "Order Invoice";
          $data['return_url'] = route('payment.sucess');
          $data['cancel_url'] = route('payment.cancel');
          $data['total'] = 100;

          $provider = new ExpressCheckout;
          $response = $provider->setExpressCheckout($data);
          $response = $provider->setExpressCheckout($data);
          return redirect($response['paypal_link']);

       }

       public function cancel()
       {
         dd('You are cancelled this payment');
       }
    
}
