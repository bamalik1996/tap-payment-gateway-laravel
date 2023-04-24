<?php

namespace Bamalik1996\TapPaymentGateway;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bamalik1996\TapPaymentGatewayLaravel\Skeleton\SkeletonClass
 */
class TapPaymentGatewayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tap-payment-gateway-laravel';
    }
}
