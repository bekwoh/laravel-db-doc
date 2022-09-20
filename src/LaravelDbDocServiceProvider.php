<?php

namespace Bekwoh\LaravelDbDoc;

use Bekwoh\LaravelDbDoc\Commands\LaravelDbDocCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDbDocServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-db-doc')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-db-doc_table')
            ->hasCommand(LaravelDbDocCommand::class);
    }
}
