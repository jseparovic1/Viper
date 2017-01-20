<?php

class PagesController
{
	public function home()
	{
		$title = "Viper";
		$heading = "Viper";

		return view('index', compact('title','heading'));
	}
}