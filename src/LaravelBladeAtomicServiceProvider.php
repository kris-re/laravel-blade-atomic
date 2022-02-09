<?php

namespace KrisRe\LaravelBladeAtomic;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use KrisRe\LaravelBladeAtomic\Commands\LaravelBladeAtomicCommand;

class LaravelBladeAtomicServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blade-atomic')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-blade-atomic_table')
            ->hasCommand(LaravelBladeAtomicCommand::class);
    }
}
