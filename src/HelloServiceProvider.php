<?php

namespace Virtualorz\Hello;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $this->app->make(HelloController::class);
        $this->loadViewsFrom(__DIR__ . '/views', 'Hello');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }
}
