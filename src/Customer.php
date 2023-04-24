<?php

namespace Bamalik1996\TapPaymentGateway;

use Bamalik1996\TapPaymentGateway\Api;

class Customer extends Api
{
    use \Bamalik1996\TapPaymentGateway\Request\Create;
    // use \TapPayments\Requests\Retrieve;
    // use \TapPayments\Requests\Update;
    // use \TapPayments\Requests\All;
    protected static $endpoint = '/v2/customers';
    private static function classUrl()
    {
        return self::$endpoint;
    }


}
