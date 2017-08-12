<?php

namespace App\Controllers;

/**
  * Controller with method home() example.
  */
class PagesController
{
    public function home()
    {
        $title = 'Viper';
        $heading = 'Viper';

        return view('index', compact('title', 'heading'));
    }
}
