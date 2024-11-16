<?php

namespace illuminates;

use illuminates\Router\Route;
use App\Core;
use illuminates\Router\Segment;

class Application
{
	protected $router;
	
	/**
	 * To start MVC app
	 * @return void
	 */
	public function start(): void
	{
		$this->router = new Route();
		
		if (Segment::get(0) == 'api') {
			$this->apiRoute();
		} else {
			$this->webRoute();
		}
	}
	
	/**
	 * To dispatch many classes
	 */
	public function __destruct()
	{
		$this->router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
	}
	
	/**
	 * @return void
	 */
	public function webRoute(): void
	{
		foreach (Core::$globalWeb as $global) {
			new $global();
		}
		include route_path('/web.php');
	}
	
	public function apiRoute(): void
	{
		foreach (Core::$globalApi as $global) {
			new $global();
		}
		include route_path('/api.php');
	}
}
