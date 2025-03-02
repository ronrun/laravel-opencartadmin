<?php

namespace Ronrun\LaravelOpencartAdmin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

class LaravelOpencartAdminServiceProvider  extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        // Log::info('LaravelOpencartAdminServiceProvider boot() loaded.');

        // // 如果有 routes、config、migrations，可以在這裡載入
        // $this->publishes([
        //     __DIR__ . '/../config/opencartadmin.php' => config_path('opencartadmin.php'),
        // ], 'config');

        // // 發布資源
        // $this->publishes([
        //     __DIR__.'/../../public' => public_path('vendor/laravel-opencartadmin'),
        // ], 'laravel-opencartadmin-assets');
    }
}
