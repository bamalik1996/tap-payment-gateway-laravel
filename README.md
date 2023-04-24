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

## Usage

```php
// Usage description here
```

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`TAP_PAYMENT_MODE` = 'sandbox' // production

`TAP_PAYMENT_SECRET_KEY`

`TAP_PAYMENT_PUBLISH_KEY`

`TAP_PAYMENT_SANDBOX_SECRET_KEY`

`TAP_PAYMENT_SANDBOX_PUBLISH_KEY`


## Usage/Examples
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
## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email bilalmalik531996@gmail.com instead of using the issue tracker.

## Credits

-   [BIlal Malik](https://github.com/bamalik1996)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
