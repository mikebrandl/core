<?php

namespace MB\Core;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('core');

        $this->publishes([
            $this->package->basePath('/../dist/.phpcs.xml') => '.phpcs.xml',
            $this->package->basePath('/../dist/phpstan.neon') => 'phpstan.neon',
        ]);
    }
}
