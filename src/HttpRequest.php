<?php

namespace Bamalik1996\TapPaymentGateway;

use Exception;
use Illuminate\Support\Facades\Http;

trait  HttpRequest
{
    public static function request($url, $params)
    {

        if (!in_array(env('TAP_PAYMENT_MODE'), ['sandbox', 'production'])) {
            throw new Exception("Tap payment gateway mode is invalid.", 1);
        }

        $secret_key = env('TAP_PAYMENT_SECRET_KEY');
        $publish_key = env('TAP_PAYMENT_PUBLISH_KEY');

        if (env('TAP_PAYMENT_MODE') == 'sandbox') {
            $secret_key = env('TAP_PAYMENT_SANDBOX_SECRET_KEY');
            $publish_key = env('TAP_PAYMENT_SANDBOX_PUBLISH_KEY');
        }

        return  Http::withHeaders([
            'authorization' => 'Bearer ' . $secret_key,
            "content-type" => "application/json"
        ])->post($url, $params);
    }
}
