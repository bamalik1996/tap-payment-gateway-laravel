<?php

namespace Bamalik1996\TapPaymentGateway;

class TapPaymentGateway
{
    public function charges()
    {
        return new Charges;
    }

    public function refunds()
    {
        return new Refunds;
    }

    public function customers()
    {
        return new Customer;
    }

    public function authorize()
    {
        return new Authorize;
    }
}
