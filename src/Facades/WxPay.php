<?php
namespace Alezh\Alipay\Facades;
use Illuminate\Support\Facades\Facade;
class WxPay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'wxpayapi';
    }
}
