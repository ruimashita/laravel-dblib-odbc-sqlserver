<?php
namespace ODBCSqlServer\Database;

use Illuminate\Database\Connectors\Connector as BaceConnector;
use Illuminate\Database\Connectors\ConnectorInterface;

class Connector extends BaceConnector implements ConnectorInterface
{
    public function connect(array $config)
    {

        $options = $this->getOptions($config);
        $dsn = array_get($config, 'dsn');
        $connection = $this->createConnection($dsn, $config, $options);

        return $connection;
    }
}
