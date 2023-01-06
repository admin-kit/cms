<?php

namespace AdminKit\Cms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Cms\Cms
 */
class Cms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Cms\Cms::class;
    }
}
