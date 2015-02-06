<?php
namespace ODBCSqlServer\Database;

use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Model;
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
            $connector = new Connector();
            $pdo = $connector->connect($config);
            $db = new Connection($pdo, $config['database'], $config['prefix']);
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
