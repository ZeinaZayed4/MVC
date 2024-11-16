<?php

namespace Illuminates\Router;

class Segment
{
	public static function uri()
	{
		return str_replace('/MVC/public/', '', $_SERVER['REQUEST_URI']);
	}
	
	/**
	 * @param int $offset
	 * @return string
	 */
	public static function get(int $offset): string
	{
		$uri = self::uri();
		$segments = explode('/', $uri);
		return $segments[$offset] ?? '';
	}
	
	/**
	 * @return string[]
	 */
	public static function all(): array
	{
		return explode('/', static::uri());
	}
}
