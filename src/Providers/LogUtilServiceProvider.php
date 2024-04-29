<?php

namespace Devnav2902\Providers;

use Illuminate\Support\ServiceProvider;

class LogUtilServiceProvider extends ServiceProvider
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
        // dd(__DIR__.'/../Routes/route.php');
        $this->loadRoutesFrom(__DIR__.'/../Routes/route.php');

        $viewPath = resource_path('views/vendor/devnav2902');
        $resourcePath = __DIR__.'/../resources/views';

        $this->publishes([
            $resourcePath => $viewPath
        ], 'resource-views');

        $this->loadViewsFrom($resourcePath, 'devnav2902');
    }
}
