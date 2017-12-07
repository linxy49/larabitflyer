<?php

namespace Linxy49\LaraBitflyer;

use Illuminate\Support\ServiceProvider as BasicServiceProvider;

class ServiceProvider extends BasicServiceProvider
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
        $this->app->singleton('larabitflyer',function(){
            return new Client;
        });
    }
}
