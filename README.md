# omnipay-fatzebra
Fat Zebra / Paystream driver for the Omnipay PHP payment processing library

**Fat Zebra / Paystream driver for the Omnipay PHP payment processing library**

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements Fat Zebra / Paystream support for Omnipay.

[Fat Zebra](https://www.fatzebra.com.au/) and [Paystream](http://www.paystream.com.au/) are
Australian online payments processing providers with equivalent REST APIs.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "delatbabel/omnipay-fatzebra": "~2.0"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update

## Basic Usage

The following transactions are provided by this package via the REST API:

* Create a purchase
* Retrieve a purchase
* Refund a purchase

For general usage instructions, please see the main [Omnipay](https://github.com/thephpleague/omnipay)
repository.  There are also examples in the class API documentation.

## TODO

* Token Payments
* Recurring Payments
* Hosted Payments

## Support

If you are having general issues with Omnipay, we suggest posting on
[Stack Overflow](http://stackoverflow.com/). Be sure to add the
[omnipay tag](http://stackoverflow.com/questions/tagged/omnipay) so it can be easily found.

If you want to keep up to date with release anouncements, discuss ideas for the project,
or ask more detailed questions, there is also a [mailing list](https://groups.google.com/forum/#!forum/omnipay) which
you can subscribe to.

If you believe you have found a bug, please report it using the [GitHub issue tracker](https://github.com/delatbabel/omnipay-fatzebra/issues),
or better yet, fork the library and submit a pull request.