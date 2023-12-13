<?php

namespace MB\Core;

use MB\Core\Commands\CoreCommand;
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
            $this->package->basePath('/../.phpcs.xml') => ".phpcs.xml",
        ]);
//            ->hasConfigFile()
//            ->hasViews()
//            ->hasMigration('create_core_table')
//            ->hasCommand(CoreCommand::class);
    }


}
