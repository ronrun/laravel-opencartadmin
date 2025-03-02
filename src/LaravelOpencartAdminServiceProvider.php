<?php

namespace Ronrun\LaravelOpencartAdmin;

use Illuminate\Support\ServiceProvider;

class LaravelOpencartAdminServiceProvider  extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('opencart', function () {
            return new \Ronrun\OpenCartAdmin\OpenCartAdmin();
        });
    }

    public function boot()
    {
        // 如果有 routes、config、migrations，可以在這裡載入
        $this->publishes([
            __DIR__ . '/../config/opencartadmin.php' => config_path('opencartadmin.php'),
        ], 'config');
    }
}
