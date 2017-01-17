# GuideStar QuickStart Laravel 5.3

GuideStar QuickStart APIs are free APIs intended to provide developers with an easy way to experiment with the integration of GuideStar data into existing applications.

[![Latest Stable Version](https://poser.pugx.org/kevinem/guidestar-quickstart-laravel/v/stable?format=flat-square)](https://packagist.org/packages/kevinem/guidestar-quickstart-laravel)
[![License](https://poser.pugx.org/kevinem/guidestar-quickstart-laravel/license?format=flat-square)](https://packagist.org/packages/kevinem/guidestar-quickstart-laravel)
[![Build Status](https://travis-ci.org/kevinem/guidestar-quickstart-laravel.svg?branch=master)](https://travis-ci.org/kevinem/guidestar-quickstart-laravel)

## Installation

To install, use composer:

```
composer require kevinem/guidestar-quickstart-laravel
```

## Documentation

https://community.guidestar.org/docs/DOC-1867

## Configuration

After installing the package, register the `KevinEm\GuideStar\Laravel\Providers\QuickStartDetailServiceProvider`
and `KevinEm\GuideStar\Laravel\Providers\QuickStartSearchServiceProvider` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    KevinEm\GuideStar\Laravel\Providers\QuickStartDetailServiceProvider::class,
    KevinEm\GuideStar\Laravel\Providers\QuickStartSearchServiceProvider::class
],

```
Also, you can add the `QuickStartSearch` and `QuickStartDetail` facade to the `aliases` array in your `config/app.php`
configuration file:

```php
'aliases' => [
    // Other facades...

    'QuickStartSearch' => KevinEm\GuideStar\Laravel\Facades\QuickStartSearch::class,
    'QuickStartDetail' => KevinEm\GuideStar\Laravel\Facades\QuickStartDetail::class,
],
```

Publish the config using the following command:

```php
$ php artisan vendor:publish
```

## Example Usage

```php
QuickStartSearch::searchEIN('54-1774039');

QuickStartDetail::getOrganizationDetail(7831216);
```

## License 

The MIT License (MIT)
Copyright (c) 2017 Kevin Em

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
documentation files (the "Software"), to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of
the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
IN THE SOFTWARE.
