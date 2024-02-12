<?php
namespace Riwash\Auth;

use Illuminate\Support\ServiceProvider;

class RiwashAuthServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/riwashadmin.php', 'riwashadmin');

    }
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->publishes([
            __DIR__ . '/config/riwashadmin.php' => config_path('riwashadmin.php'),
        ], 'config');


    }

}

?>