<?php

namespace App\Http\Controllers;

class HomeController
{
	public function index(): string
	{
		return 'Welcome to index page <br/>';
	}
	
	public function about(): void
	{
		echo 'Welcome to about page <br/>';
	}
	
	public function article($id): void
	{
		echo 'Welcome to article page  id = ' . $id . '<br />';
	}
}
