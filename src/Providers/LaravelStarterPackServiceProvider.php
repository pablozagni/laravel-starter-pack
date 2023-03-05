<?php

namespace Pablozagni\LaravelStarterPack\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelStarterPackServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // // Loading the views.
        // $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'fbc');

        // // Publishing the views.
        // $this->publishes([
        //     __DIR__ . '/../../resources/views' => resource_path('views/vendor/fbc'),
        // ], 'fbc-views');

        $this->publishes([
            __DIR__ . '/../../resources/views/components' => resource_path('views/components'),
            __DIR__ . '/../../resources/views' => resource_path('views'),
            __DIR__ . '/../../resources/css' => resource_path('css'),
            __DIR__ . '/../../app/View/Components' => app_path('View/Components'),
        ], 'LaravelStarterPack');

    }

    public function register()
    {
        //
    }
}
