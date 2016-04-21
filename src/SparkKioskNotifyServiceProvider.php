<?php

namespace vmitchell85\SparkKioskNotify;

use Illuminate\Support\ServiceProvider;

class SparkKioskNotifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views/', 'spark-kiosk-notify');

        $this->publishes([
            __DIR__.'/resources/assets/js/' => base_path('resources/assets/js/components/'),
            __DIR__ . '/resources/views/' => base_path('resources/views/vendor/spark-kiosk-notify/'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
    }
}
