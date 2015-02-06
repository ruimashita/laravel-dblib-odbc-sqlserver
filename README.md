# PDO DBLIB and PDO ODBC SQL Server Driver for Laravel 4.

## Requirements
- PHP 5.3+
- Laravel 4.2.*

## Installation
Add `rui_mashita/laravel-dblib-odbc-sqlserver` as a requirement to composer.json:

```json
{
    "require": {
        "rui_mashita/laravel-dblib-odbc-sqlserver": "dev-master"
    }
}
```

service provider registration in you `app.php` file under `app\config` path from Laravel project root folder.

```php
'DblibOdbcSqlServer\Database\ServiceProvider',
```

## Configuration
Finally be sure to add the odbc driver with connection information to the `config/database.php` file like so:

```php
    'connections' => array(

        // .. Existing config here ..

        // ODBC config example
        'odbc' => array(
            'driver' => 'odbc',
            'dsn' => 'Driver={ODBC Driver};',
            'username' => 'foo',
            'password' => 'bar',
            'database' => '',
        ),

        // DBLIB config example
        'dblib' => array(
            'driver' => 'dblib',
            'host' => '172.16.0.223',
            'port' => '1433',
            'username' => 'sa',
            'password' => 'password',
            'database' => 'testtest',
        ),
    ),
```
