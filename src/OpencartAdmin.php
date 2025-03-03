<?php

namespace Ronrun\OpencartAdmin;

class OpencartAdmin
{
    protected static bool $ignoreRoutes = false;

    public static function ignoreRoutes()
    {
        static::$ignoreRoutes = true;
    }

    public static function shouldIgnoreRoutes()
    {
        return static::$ignoreRoutes;
    }

}
