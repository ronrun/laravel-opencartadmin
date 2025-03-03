<?php

namespace Ronrun\OpencartAdmin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

class OpencartAdminServiceProvider  extends ServiceProvider
{
    protected static bool $ignoreRoutes = false;

    public static function ignoreRoutes()
    {
        static::$ignoreRoutes = true;
    }

    public function register()
    {
        
    }

    public function boot()
    {
        // View
        $viewPath = realpath(__DIR__.'/../resources/views');

        View::addLocation($viewPath);

        // Routes
        if (!OpencartAdmin::shouldIgnoreRoutes()) {
            $this->loadRoutesFrom(__DIR__.'/../routes/admin.php');
        }
        
        // 發布資源
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/ocadmin'),
        ], 'opencartadmin-assets');
    }
}
