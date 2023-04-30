<?php

namespace Bamalik1996\TapPaymentGateway\Request;

use Bamalik1996\TapPaymentGateway\HttpRequest;

/**
 * Trait for Retrieveable resources. Adds a `Retrieve()` static method to the class.
 *
 * This trait should only be applied to classes that derive from GoSellObjects.
 */
trait Delete
{
	public static function delete($id = null, $options = null)
    {
        $url = static::baseUrl() . static::classUrl() . '/' . $id;
        $response =  HttpRequest::request('get', $url);
        return $response->json();
    }
}
