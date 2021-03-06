<?php


require '../vendor/autoload.php';

use Viper\App;
use Viper\Database\Connection;
use Viper\Database\QueryBuilder;

App::bind('config', require '../config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
