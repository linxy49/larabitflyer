<?php

namespace Linxy49\Bitflyer;

use Illuminate\Support\ServiceProvider as BasicServiceProvider;

class BitflyerServiceProvider extends BasicServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('bitflyer.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/bitflyer.php', 'bitflyer'
        );

        $this->app->bind('bitflyer', 'Linxy49\Bitflyer\Bitflyer');
    }

    public function provides()
    {
        return ['bitflyer'];
    }
}
