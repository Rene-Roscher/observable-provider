# Simplified way to register the observers in Laravel for a model

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rene-roscher/observable-provider.svg?style=flat-square)](https://packagist.org/packages/rene-roscher/observable-provider)
[![Total Downloads](https://img.shields.io/packagist/dt/rene-roscher/observable-provider.svg?style=flat-square)](https://packagist.org/packages/rene-roscher/observable-provider)

---
With this package, you should be able to register your observers more easily. Quite simply through the key-> value principle.

See the following example.

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

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/observable-provider.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/observable-provider)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require rene-roscher/observable-provider
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Xepare\ObservableProvider\ObservableProviderServiceProvider" --tag="observable-provider-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Xepare\ObservableProvider\ObservableProviderServiceProvider" --tag="observable-provider-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$observable-provider = new Xepare\ObservableProvider();
echo $observable-provider->echoPhrase('Hello, Xepare!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rene Roscher](https://github.com/Rene-Roscher)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
