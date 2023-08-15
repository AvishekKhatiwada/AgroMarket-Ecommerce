<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client as GuzzleClient;

class KhaltiPaymentController extends Controller
{
    public function initiatePayment()
    {
        $amount = 100; // Replace with your actual amount
        $transactionId = uniqid(); // Generate a unique transaction ID

        $config = [
            'publicKey' => config('app.khalti_public_key'),
            'secretKey' => config('app.khalti_secret_key'),
            'baseUrl' => config('app.khalti_base_url'),
        ];

        $khaltiClient = new Khalti\Client($config);

        $data = [
            'token' => $transactionId,
            'amount' => $amount * 100, // Amount in paisa
        ];

        $paymentResponse = $khaltiClient->payment->initiate($data);

        // Redirect the user to the Khalti payment gateway
        return redirect($paymentResponse['redirect']);
    }

    public function verifyPayment(Request $request)
    {
        $config = [
            'publicKey' => config('app.khalti_public_key'),
            'secretKey' => config('app.khalti_secret_key'),
            'baseUrl' => config('app.khalti_base_url'),
        ];

        $khaltiClient = new Khalti\Client($config);

        $verificationData = [
            'token' => $request->input('token'),
        ];

        $verificationResponse = $khaltiClient->payment->verify($verificationData);

        if ($verificationResponse['idx'] === '1000') {
            // Payment successful, update order status to 'Paid' and perform other necessary actions
        } else {
            // Payment failed, handle accordingly
        }
    }
}
