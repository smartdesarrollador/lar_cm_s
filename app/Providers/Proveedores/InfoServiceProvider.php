<?php

namespace App\Providers\Proveedores;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class InfoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //

                          \App::bind('build', function()
        {
            return new \App\Components\HtmlGenerator;
        });
    }
}
