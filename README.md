# Simplified way to register the observers in Laravel for a model

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rene-roscher/observable-provider.svg?style=flat-square)](https://packagist.org/packages/rene-roscher/observable-provider)
[![Total Downloads](https://img.shields.io/packagist/dt/rene-roscher/observable-provider.svg?style=flat-square)](https://packagist.org/packages/rene-roscher/observable-provider)

---
With this package, you should be able to register your observers more easily. Quite simply through the key-> value principle.

## Installation

You can install the package via composer:

```bash
composer require rene-roscher/observable-provider
```

## Usage

```php
<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Xepare\ObservableProvider as ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{

    /**
     * The observer mappings for the application.
     *
     * @var array
     */
    protected array $observables = [
        User::class => UserObserver::class,
    ];

}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
