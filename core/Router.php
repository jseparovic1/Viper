<?php
namespace Viper;

class Router 
{
	/**
	 * All registered routes
	 * @var array
	 */
	public $routes = [
		'GET' 	=> [],
		'POST' 	=> []
	];

	/**	
	 * Load users routes file
	 * @param  string $file file name
	 */
	public static function load($file)
	{
		//creating instance of Router class because routes.php needs it
		$router = new self();

		require $file;

		return $router;
	}

	/**
	 * Assign GET route and its controller
	 * @param  string $uri       uri that user want to register eg /index
	 * @param  string $controler 
	 */
	public function get($uri,$controler)
	{
		$this->routes['GET'][$uri] = $controler;
	}

	/**
	 * Register POST rute and its controller
	 * @param  string $uri       
	 * @param  string $controler             
	 */
	public function post($uri,$controler)
	{
		$this->routes['POST'][$uri] = $controler;
	}

	/**
	 * Load the requested uri's associated controller and its action 
	 * @param  string $uri    
	 * @param  stromg $method REQUEST_METHOD
	 */
	public function direct($uri ,$method)
	{
		if (array_key_exists($uri, $this->routes[$method])) {
			//route and controlers  is something like PageControler@home so we need to split it
			$splitControler = explode("@",$this->routes[$method][$uri]);
			$controllerName = $splitControler[0];
			$action = $splitControler[1];
			return $this->callAction($controllerName, $action);
		} else {
			view('404');
		}
	}

	/**
	 * [callAction description]
	 * @param  string $controller Controller's name
	 * @param  string $action     Controler's method or action (e.g home)
	 */
	protected function callAction($controller, $action)
	{
		$controller = "App\Controllers\\{$controller}";

		$controller = new $controller();
		if (!method_exists($controller, $action)) {
			throw new Exception("Method {$action} does not exist");
		}
		return $controller->$action();
	}
}