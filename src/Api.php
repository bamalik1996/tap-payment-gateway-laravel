<?php

namespace Bamalik1996\TapPaymentGateway;

abstract class Api
{
    public static function baseUrl()
    {
        return 'https://api.tap.company';
    }
    public static function getKey()
    {
        return env('TAP_PAYMENT_SECRET_KEY');
    }
}
