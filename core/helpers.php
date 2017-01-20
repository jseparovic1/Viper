<?php
/**
 * Require view
 * @param  string $name views name
 * @param  array  $data data that is passed to view
 */
function view($name, $data = [])
{
	extract($data);
	return require "views/{$name}.view.php";
}
/**
 * Redirects user to specific path
 * @param  string $path 
 */
function redirect($path)
{
	header("Location:{$path}");
}