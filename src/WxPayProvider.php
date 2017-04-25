<?php

namespace Alezh\WxPay;

use Illuminate\Support\ServiceProvider;

class WxPayProvider extends ServiceProvider
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
        // $config = config('WxPay');
        $this->app->singleton("wxpayapi", function ()  {
            return new wxpayapi();
        });
    }
}
