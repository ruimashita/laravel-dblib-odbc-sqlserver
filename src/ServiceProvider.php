<?php
namespace DblibOdbcSqlServer\Database;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    public function boot()
    {
        $factory = $this->app['db'];
        $factory->extend('odbc', function ($config) {
            if (!isset($config['prefix'])) {
                $config['prefix'] = '';
            }
            $connector = new ODBCConnector();
            $pdo = $connector->connect($config);
            $db = new ODBCConnector($pdo, $config['database'], $config['prefix']);
            return $db;
        });

    }

    public function register()
    {

    }

    public function provides()
    {
        return array();
    }
}
