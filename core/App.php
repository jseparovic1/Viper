<?php
namespace Viper\Core;

/**
* Dependency injection container
*/
class App
{
	/**
	 * All registered keys
	 * @var array
	 */
	private static $registry = [];

	/**
	 * Bind new key and value to dependecy container
	 * @param  string $key   dependecy key
	 * @param  mixed $value 
	 */
	public static function bind($key, $value)
	{
		static::$registry[$key] = $value;
	}

	/**
	 * Get values from registry with key
	 * @param  string $key 
	 */
	public static function get($key)
	{
		if (array_key_exists($key, static::$registry)) {
			return static::$registry[$key];
		}
		throw new Exception("No {$key} is bound into the App container");	
	}
}

