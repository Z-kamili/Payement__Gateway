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
       }
    
}
