<?php


require '../core/bootstrap.php';

use Viper\Request;
use Viper\Router;

/*
 * Load user defined route , and then direct user
 *
 *  load() static method loads routes and then returns an instance of Router
 *  direct() method returns path to controller for requested route e.g controllers/about.php
 */
 Router::load('../app/routes.php')->direct(Request::uri(), Request::method());
