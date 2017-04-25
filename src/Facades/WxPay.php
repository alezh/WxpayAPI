<?php
namespace Alezh\WxPay\Facades;
use Illuminate\Support\Facades\Facade;
class WxPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wxpayapi';
    }
}
