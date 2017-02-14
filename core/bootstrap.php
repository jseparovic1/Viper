<?php 

require '../vendor/autoload.php';

use Viper\Core\App;
use Viper\Core\Database\{Connection,QueryBuilder};

App::bind('config', require '../config.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

