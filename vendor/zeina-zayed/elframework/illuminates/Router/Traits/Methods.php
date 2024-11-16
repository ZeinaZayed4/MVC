<?php

namespace illuminates\Router\Traits;

trait Methods
{
	/**
	 * @param string $route
	 * @param mixed $controller
	 * @param mixed $action
	 * @param array $middlewares
	 * @return void
	 */
	public static function get(string $route, mixed $controller, mixed $action = null, array $middlewares = []): void
	{
		parent::add('GET', $route, $controller, $action, $middlewares);
	}
	
	/**
	 * @param string $route
	 * @param mixed $controller
	 * @param mixed $action
	 * @param array $middlewares
	 * @return void
	 */
	public static function post(string $route, mixed $controller, mixed $action, array $middlewares = []): void
	{
		parent::add('POST', $route, $controller, $action, $middlewares);
	}
	
	/**
	 * @param string $route
	 * @param mixed $controller
	 * @param mixed $action
	 * @param array $middlewares
	 * @return void
	 */
	public static function put(string $route, mixed $controller, mixed $action, array $middlewares = []): void
	{
		parent::add('PUT', $route, $controller, $action, $middlewares);
	}
	
	/**
	 * @param string $route
	 * @param mixed $controller
	 * @param mixed $action
	 * @param array $middlewares
	 * @return void
	 */
	public static function patch(string $route, mixed $controller, mixed $action, array $middlewares = []): void
	{
		parent::add('PATCH', $route, $controller, $action, $middlewares);
	}
	
	/**
	 * @param string $route
	 * @param mixed $controller
	 * @param mixed $action
	 * @param array $middlewares
	 * @return void
	 */
	public static function delete(string $route, mixed $controller, mixed $action, array $middlewares = []): void
	{
		parent::add('DELETE', $route, $controller, $action, $middlewares);
	}
}
