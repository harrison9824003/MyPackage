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
        include(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'Hello');
    }
}
