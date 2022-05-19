<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function inlinePay(Request $req)
    {
        //inline payment INLINE

        $curl = curl_init();
        $email = $req->user_email;

        $amount = 30000;  //the amount in kobo. This value is actually NGN 300
        curl_setopt_array($curl, array(

            CURLOPT_URL => "https://api.paystack.co/transaction/initialize",

            CURLOPT_RETURNTRANSFER => true,

            CURLOPT_CUSTOMREQUEST => "POST",

            CURLOPT_POSTFIELDS => json_encode([

                'amount'=>$amount,

                'email'=>$email,

                //'reference' => genReference(10);

            ]),

            CURLOPT_HTTPHEADER => [

                "authorization: Bearer pk_test_c47cc0952a6e3844ff3c405c822dc11649b0ce50", //replace this with your own live key

                "content-type: application/json",

                "cache-control: no-cache"

            ],

        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);
        if($err){

            // there was an error contacting the Paystack API

            die('Curl returned error: ' . $err);

        }
        $tranx = json_decode($response, true);

        //return $tranx;

        if(!$tranx['status']){

            // there was an error from the API

            print_r('API returned error: ' . $tranx['message']);

        }


        // comment out this line if you want to redirect the user to the payment page

        // print_r($tranx);


        // redirect to page so User can pay


        header('Location: ' . $tranx['data']['authorization_url']);


    }
}