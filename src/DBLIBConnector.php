<?php
namespace DblibOdbcSqlServer\Database;

use Illuminate\Database\Connectors\Connector as BaceConnector;
use Illuminate\Database\Connectors\ConnectorInterface;

class DBLIBConnector extends BaceConnector implements ConnectorInterface
{
    public function connect(array $config)
    {

        $options = $this->getOptions($config);
        $dsn = $this->getDsn($config);
        $connection = $this->createConnection($dsn, $config, $options);

        return $connection;
    }

    protected function getDsn(array $config)
    {
        extract($config);
        return isset($config['port'])
            ? "dblib:host={$host};port={$port};dbname={$database}"
            : "dblib:host={$host};dbname={$database}";
    }
}
