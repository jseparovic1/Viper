<?php

/**
* Getting user requests details
*/
class Request 
{
	/**
	 * Returns URI path 
	 */
	public static function uri()
	{
		//we need to parse url and trim its slashes
		return trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), '/');
	}

	/**
	 *	Returns server request method
	 * 	GET,POST,PUT,DELETE ...
	 */
	public static function method()
	{
		return $_SERVER["REQUEST_METHOD"];
	}
}