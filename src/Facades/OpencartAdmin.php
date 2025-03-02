<?php

namespace Ronrun\OpencartAdmin\Facades;

use Illuminate\Support\Facades\Facade;

class OpencartAdmin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'opencart';
    }
}
