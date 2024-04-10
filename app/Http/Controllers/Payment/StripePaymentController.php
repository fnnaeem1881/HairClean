<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Mail\PaymentConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe()

    {

        return view('callback');

    }



    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

     public function stripePost(Request $request)

     {
        $time=$request->time;
        $json_data = File::get(public_path('data.json'));
        $data = json_decode($json_data, true);
        $item=null;
        foreach ($data as $SelectData) {
            if ($SelectData['id']==$request->id) {
                $item=$SelectData;
            }
        }
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



         $customer = Stripe\Customer::create(array(

                 "address" => [

                         "line1" => "Virani Chowk",

                         "postal_code" => "360001",

                         "city" => "Rajkot",

                         "state" => "GJ",

                         "country" => "IN",

                     ],

                 "email" => $item['email'],

                 "name" =>  $item['title'],

                 "source" => $request->stripeToken

              ));


       $res=  Stripe\Charge::create ([

                 "amount" => 100 *  $item['price'],

                 "currency" => "usd",

                 "customer" => $customer->id,

                 "description" => $time,

                 "shipping" => [

                   "name" => $item['title'],

                   "address" => [

                     "line1" => "510 Townsend St",

                     "postal_code" => "98140",

                     "city" => "San Francisco",

                     "state" => "CA",

                     "country" => "US",

                   ],

                 ]

         ]);
         Mail::to($item['email'])->send(new PaymentConfirmation($item, $time));

         Session::flash('success', 'Payment successful!');



         return redirect()->route('payment-callback');

     }
}
