<?php

use illuminates\Router\Route;
use App\Http\Middleware\SimpleMiddleware;
use App\Http\Middleware\UsersMiddleware;

Route::group(['prefix' => '/api/', 'middleware' => [SimpleMiddleware::class]], function () {
	Route::get('/', function () {
		return 'Welcome to API route';
	});
	
	Route::get('/users', function () {
		return 'Welcome to users API route';
	}, [UsersMiddleware::class]);
	
	Route::get('/article', function () {
		return 'Welcome to article API route';
	});
});
