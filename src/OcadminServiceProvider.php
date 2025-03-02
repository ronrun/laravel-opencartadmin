<?php

namespace Ronrun\Ocadmin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

class OcadminServiceProvider  extends ServiceProvider
{
    public function register()
    {
        
    }

    public function boot()
    {
        // View
        $viewPath = realpath(__DIR__.'/../resources/views');

        View::addLocation($viewPath);

        // Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/admin.php');
        
        // Log::info('LaravelOpencartAdminServiceProvider boot() loaded.');

        // // 如果有 routes、config、migrations，可以在這裡載入
        // $this->publishes([
        //     __DIR__ . '/../config/opencartadmin.php' => config_path('opencartadmin.php'),
        // ], 'config');

        // 發布資源
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/ocadmin'),
        ], 'ocadmin-assets');
    }
}
