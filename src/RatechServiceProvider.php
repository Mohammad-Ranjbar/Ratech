<?php

namespace Ratech\AdminPanel;

use Illuminate\Support\ServiceProvider;

class RatechServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__.'/views' => resource_path('views'),
            __DIR__ . '/database/migrations' => database_path('migrations')
        ]);
    }

    public function register()
    {
    }
}
