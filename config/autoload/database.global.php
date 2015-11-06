<?php
$hostname = getenv('APPDB_HOSTNAME');
$dbname = getenv('APPDB_DBNAME');
$username = getenv('APPDB_USERNAME');
$password = getenv('APPDB_PASSWORD');

return array(
    'db' => array(
        'driver'    => 'PdoMysql',
        'hostname'  => $hostname ?: '127.0.0.1',
        'database'  => $dbname ?: 'cloudbooks',
        'username'  => $username ?: 'cloudbooks',
        'password'  => $password ?: 'cloudbooks',
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);