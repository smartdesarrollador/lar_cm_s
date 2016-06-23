<?php
 
namespace App\Providers;
 
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
 
class GeneradorComponentesServiceProvider extends ServiceProvider
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
        \App::bind('banner', function()
        {
            return new \App\Components\GeneradorComponentes;
        });
    }
}