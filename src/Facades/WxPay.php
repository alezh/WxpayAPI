<?php
namespace Alezh\Alipay\Facades;
use Illuminate\Support\Facades\Facade;
class Alipay extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'WxPayApi';
    }
}
