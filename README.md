# WxpayAPI

### 开发 Laravel WxpayAPI V3

### 用法

```
composer require alezh/WxPay
```

或者在你的 `composer.json` 的 require 部分中添加:
```json
 "alezh/WxPay": "~2.0"
```

下载完毕之后,直接配置 `config/app.php` 的 `providers`,`aliases`:

```php
\Alezh\WxPay\WxPayProvider::class,

'WxPay' => Alezh\WxPay\Facades\WxPay::class
```
$ php artisan vendor:publish --provider="Alezh\WxPay\WxPayProvider"
