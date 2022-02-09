<?php

namespace KrisRe\LaravelBladeAtomic\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \KrisRe\LaravelBladeAtomic\LaravelBladeAtomic
 */
class LaravelBladeAtomic extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-blade-atomic';
    }
}
