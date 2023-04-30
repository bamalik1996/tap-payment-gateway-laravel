<?php

namespace Bamalik1996\TapPaymentGateway;

use Bamalik1996\TapPaymentGateway\Api;

class Charges extends Api
{
    use \Bamalik1996\TapPaymentGateway\Request\Create;
    use \Bamalik1996\TapPaymentGateway\Request\Retrieve;
    use \Bamalik1996\TapPaymentGateway\Request\Update;
    use \Bamalik1996\TapPaymentGateway\Request\Delete;
    use \Bamalik1996\TapPaymentGateway\Request\All;
    protected static $endpoint = '/v2/charges';
    private static function classUrl()
    {
        return self::$endpoint;
    }
}
