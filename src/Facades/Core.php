<?php

namespace MB\Core\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MB\Core\Core
 */
class Core extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MB\Core\Core::class;
    }
}
