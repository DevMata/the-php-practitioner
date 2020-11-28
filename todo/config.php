<?php

return [
    'database' => [
        'username' => 'root',
        'password' => 'myRootPassword',
        'dbname' => 'mytodo',
        'port' => '3306',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];