# Laravel 4 ODBC SQL Serve

## Requirements
- PHP 5.3+
- Laravel 4.2.*

## Installation
Add `rui_mashita/laravel-odbc-sqlserver` as a requirement to composer.json:

```json
{
    "require": {
        "rui_mashita/laravel-odbc-sqlserver": "dev-master"
    }
}
```

Then you need to bootstrap the driver by declaring the service provider registration in you `app.php` file under `app\config` path from Laravel project root folder.

```php
ODBCSqlServer\ServiceProvider',
```

## Configuration
Finally be sure to add the odbc driver with connection information to the `config/database.php` file like so:

```php
    'connections' => array(

        // .. Existing config here ..

        'odbc' => array(
            'driver' => 'odbc',
            'dsn' => 'Driver={iSeries Access ODBC Driver};',
            'username' => 'foo',
            'password' => 'bar',
            'database' => '',
        ),
    ),
```
