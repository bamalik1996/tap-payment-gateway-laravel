<?php

namespace Bamalik1996\TapPaymentGateway\Request;

use Illuminate\Support\Facades\Http;
use Bamalik1996\TapPaymentGateway\HttpRequest;

/**
 * Trait for creatable resources. Adds a `Retrieve()` static method to the class.
 *
 * This trait should only be applied to classes that derive from GoSellObjects.
 */
trait Retrieve
{

    public static function retrieve($id = null, $options = null)
    {
        $url = static::baseUrl() . static::classUrl() . '/' . $id;
        $response =  HttpRequest::request('get',$url);
        return $response->json();
    }
}
