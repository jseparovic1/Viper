<?php
namespace Viper;

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

	/**
     * Find user submitted get value by key
     *
     * @param $key
     * @return value of get key
     */
    public static function get($key)
    {
        $value = $_GET[$key] ?? null;
        return htmlspecialchars($value,ENT_QUOTES);
    }

    /**
     * Find user submitted post value by key
     * 
     * @param $key
     * @return post value
     */
    public static function post($key)
    {
        $value = $_POST[$key] ?? null;
        return htmlspecialchars($value,ENT_QUOTES);
    }
}