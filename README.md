# WxpayAPI

### 开发 Laravel WxpayAPI V3

### 用法

```
composer require alezh/WxPay
```

或者在你的 `composer.json` 的 require 部分中添加:
```json
 "alezh/WxPay": "~1.0"
```

下载完毕之后,直接配置 `config/app.php` 的 `providers`:

```php
\Alezh\WxPay\WxPayProvider::class,
```
$ php artisan vendor:publish --provider="Alezh\WxPay\WxPayProvider"
