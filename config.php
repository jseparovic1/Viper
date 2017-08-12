<?php


/**
 * This is dev configuration file , that returns array of config strings.
 */

return [
    'database' => [
        'name'       => 'todos',
        'host'       => 'localhost',
        'username'   => 'root',
        'password'   => '',
        'connection' => 'mysql:host=localhost',
        'options'    => [
        // options => http://php.net/manual/en/pdo.setattribute.php
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
 ];
