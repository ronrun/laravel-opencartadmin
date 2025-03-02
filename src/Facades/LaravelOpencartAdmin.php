<?php

namespace Ronrun\Ocadmin\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelOpencartAdmin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'opencart';
    }
}
