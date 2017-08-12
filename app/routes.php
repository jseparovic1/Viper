<?php

/**
 * Routes definiton
 * $router->get('route-name','controller@action').
 */
$router->get('', 'PagesController@home');
$router->get('users', 'UsersController@index');
