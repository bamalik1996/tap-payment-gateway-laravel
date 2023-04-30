<?php

namespace Bamalik1996\TapPaymentGateway\Request;

use Bamalik1996\TapPaymentGateway\HttpRequest;

/**
 * Trait for updateable resources. Adds a `update()` static method to the class.
 *
 * This trait should only be applied to classes that derive from GoSellObjects.
 */
trait Update
{
    public static function create($id, $params = null, $options = null)
    {
        $url = static::baseUrl() . static::classUrl() . '/' . $id;
        $response =  HttpRequest::request('post', $url, $params);
        return $response->json();
    }
}
