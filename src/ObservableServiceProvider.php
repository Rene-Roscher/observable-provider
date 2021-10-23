<?php

namespace Xepare;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Xepare\Commands\ObservableProviderCommand;

class ObservableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('observable-provider')
            ->hasCommand(ObservableProviderCommand::class);
    }
}
