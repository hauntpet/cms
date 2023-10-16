<?php

namespace Haunt\CMS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool isInstalled()
 * @method static string pluginsTableName()
 */
class Haunt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'haunt';
    }
}
