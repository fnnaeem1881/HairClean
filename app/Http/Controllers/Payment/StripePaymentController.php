<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe()

    {

        return view('stripe');

    }



    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

     public function stripePost(Request $request)

     {

         Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));



         $customer = Stripe\Customer::create(array(

                 "address" => [

                         "line1" => "Virani Chowk",

                         "postal_code" => "360001",

                         "city" => "Rajkot",

                         "state" => "GJ",

                         "country" => "IN",

                     ],

                 "email" => "demo@gmail.com",

                 "name" => "Hardik Savani",

                 "source" => $request->stripeToken

              ));


       $res=  Stripe\Charge::create ([

                 "amount" => 100 * 100,

                 "currency" => "usd",

                 "customer" => $customer->id,

                 "description" => "Test payment from development.",

                 "shipping" => [

                   "name" => "Jenny Rosen",

                   "address" => [

                     "line1" => "510 Townsend St",

                     "postal_code" => "98140",

                     "city" => "San Francisco",

                     "state" => "CA",

                     "country" => "US",

                   ],

                 ]

         ]);


         Session::flash('success', 'Payment successful!');



         return back();

     }
}
