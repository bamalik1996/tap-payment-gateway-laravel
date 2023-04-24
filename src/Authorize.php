<?php

namespace Bamalik1996\TapPaymentGateway;

use Bamalik1996\TapPaymentGateway\Api;

class Authorize extends Api
{
    use \Bamalik1996\TapPaymentGateway\Request\Create;
    // use \TapPayments\Requests\Retrieve;
    // use \TapPayments\Requests\Update;
    // use \TapPayments\Requests\All;
    protected static $endpoint = '/v2/authorize';
    private static function classUrl()
    {
        return self::$endpoint;
    }


}
