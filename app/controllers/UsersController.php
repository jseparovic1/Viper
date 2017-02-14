<?php

namespace App\Controllers;
use Viper\Core\App;

class UsersController
{
	/**
	 * Show all users
	 */
	public function index()
	{
		$title = 'Users';
		$heading = 'Users names:';
		$users = App::get('database')->selectAll('users');

		return view('users', compact('users','heading','title'));
	}

	/**
	 * Store new user into database 
	 */
	public function store()
	{
		//insert(tableName, ["columnName" => "value"])
		App::get('database')->insert('users',[
			'name' => $_POST['name']
			]);

		return redirect('users');
	}
}