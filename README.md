# Tap payment gateway laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bamalik1996/tap-payment-gateway-laravel.svg?style=flat-square)](https://packagist.org/packages/bamalik1996/tap-payment-gateway-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/bamalik1996/tap-payment-gateway-laravel.svg?style=flat-square)](https://packagist.org/packages/bamalik1996/tap-payment-gateway-laravel)
![GitHub Actions](https://github.com/bamalik1996/tap-payment-gateway-laravel/actions/workflows/main.yml/badge.svg)

Tap Payment SDK Package for PHP Laravel

## Installation

You can install the package via composer:

```bash
composer require bamalik1996/tap-payment-gateway-laravel
```

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`TAP_PAYMENT_MODE` = 'sandbox' // production

`TAP_PAYMENT_SECRET_KEY`

`TAP_PAYMENT_PUBLISH_KEY`

`TAP_PAYMENT_SANDBOX_SECRET_KEY`

`TAP_PAYMENT_SANDBOX_PUBLISH_KEY`## Documentation (Charge)

- [Charge](https://developers.dev.tap.company/reference/charges-2)

## Charge Create

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;
```

```php
    $trans_object["amount"]                   =  123;
    $trans_object["currency"]                 = 'AED';
    $trans_object["threeDsecure"]             = true;
    $trans_object["save_card"]                = false;
    $trans_object["description"]              = "ORDER ID :" . 1;
    $trans_object["statement_descriptor"]     = 'Sample';
    $trans_object["metadata"]["udf1"]          = 'test';
    $trans_object["metadata"]["udf2"]          = 'test';
    $trans_object["reference"]["transaction"]  = 'txn_0000' . 2;
    $trans_object["reference"]["order"]        = 2;
    $trans_object["receipt"]["email"]          = false;
    $trans_object["receipt"]["sms"]            = true;
    $trans_object["customer"]["first_name"]    = 'auth()->user()->last_name';
    $trans_object["customer"]["last_name"]    = 'auth()->user()->first_name';
    $trans_object["customer"]["email"]        = 'auth()->user()->email';
    $trans_object["customer"]["phone"]["country_code"]       = '';
    $trans_object["customer"]["phone"]["number"] = '';
    $trans_object["source"]["id"] = 'src_all';
    $trans_object["post"]["url"] = '1';
    $trans_object["redirect"]["url"] =  'v';
    $tapPaymentGateway = new TapPaymentGateway;
    return ($tapPaymentGateway->charges()->create($trans_object));
```

## Charge Update

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;

    $tapPaymentGateway = new TapPaymentGateway;

    return $tapPaymentGateway->charges()->update($id,[
        "description"=> "test",
        "receipt"=> [
            "email"=> false,
            "sms"=> true
        ],
        "metadata"=> [
            "udf2"=> "testing update"
        ]
    ]);

```

## Charge Retrieve

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;

    $tapPaymentGateway = new TapPaymentGateway;

    return $tapPaymentGateway->charges()->retrieve($id);

```

## Charge Delete

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;

    $tapPaymentGateway = new TapPaymentGateway;

    return $tapPaymentGateway->charges()->delete($id);
```

## Charge All

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;

    $tapPaymentGateway = new TapPaymentGateway;

    return $tapPaymentGateway->charges()->all([
        "period"=> [
            "date"=> [
            "from"=> time() - (30 * 24 * 60 * 60),//last 30 days
            "to"=> time()//today
            ]
        ],
        "status"=> "",
        "starting_after"=> "",
        "limit"=> 25
    ]);
```

## Documentation (Custom)

- [Customer](https://developers.dev.tap.company/reference/customers)

## Customer Create

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;
```

```php
    $params = array (
        'first_name' => 'test',
        'middle_name' => 'test',
        'last_name' => 'test',
        'email' => 'test@test.com',
        'phone' =>
        array (
            'country_code' => '965',
            'number' => '51234567',
        ),
        'description' => 'test',
        'metadata' =>
        array (
            'sample string 1' => 'string1',
            'sample string 3' => 'string2',
        ),
        'currency' => 'KWD',
    );

    $tapPaymentGateway = new TapPaymentGateway;
    return ($tapPaymentGateway->customers()->create($params));
```

## Customer Update

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;

    $tapPaymentGateway = new TapPaymentGateway;

    return $tapPaymentGateway->customers()->update($id,[
      'first_name' => 'test',
        'middle_name' => 'test',
        'last_name' => 'test',
        'email' => 'test@test.com',
        'phone' =>
        array (
            'country_code' => '965',
            'number' => '51234567',
        ),
        'description' => 'test',
        'metadata' =>
        array (
            'sample string 1' => 'string1',
            'sample string 3' => 'string2',
        ),
        'currency' => 'KWD',
    ]);

```

## Customer Retrieve

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;

    $tapPaymentGateway = new TapPaymentGateway;

    return $tapPaymentGateway->customers()->retrieve($id);

```

## Customer Delete

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;

    $tapPaymentGateway = new TapPaymentGateway;

    return $tapPaymentGateway->customers()->delete($id);
```

## Customer All

```php
use Bamalik1996\TapPaymentGateway\TapPaymentGateway;

    $tapPaymentGateway = new TapPaymentGateway;

    return $tapPaymentGateway->customers()->all([
        "period"=> [
            "date"=> [
            "from"=> time() - (30 * 24 * 60 * 60),//last 30 days
            "to"=> time()//today
            ]
        ],
        "status"=> "",
        "starting_after"=> "",
        "limit"=> 25
    ]);
```
## More Help
* [API Documentation](https://tap.company/developers)
* [Charges](https://developers.dev.tap.company/reference/charges-2)
* [Customers](https://developers.dev.tap.company/reference/customers)
