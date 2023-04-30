<?php

namespace Bamalik1996\TapPaymentGateway\Request;

use Illuminate\Support\Facades\Http;
use Bamalik1996\TapPaymentGateway\HttpRequest;

/**
 * Trait for creatable resources. Adds a `all()` static method to the class.
 *
 * This trait should only be applied to classes that derive from GoSellObjects.
 */
trait All
{
    public static function create($params = null, $options = null)
    {
        $url = static::baseUrl() . static::classUrl();
        $response =  HttpRequest::request('post',$url, $params);
        return $response->json();
    }
}
