<?php

namespace Alezh\WxPay;

use Illuminate\Support\ServiceProvider;

class AopClientProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/WxPay.php' => config_path('WxPay.php'),
        ],'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $config = config('WxPay');
        $this->app->singleton("WxPayApi", function () use ($config) {
            return new AopClient($config);
        });
    }
}
