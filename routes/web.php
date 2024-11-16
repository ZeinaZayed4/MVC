<?php

use illuminates\Router\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SimpleMiddleware;

//Route::get('/', HomeController::class, 'index');
Route::get('/', function (){
	return 'index page';
}, ['simple,admin']);
Route::get('/about', HomeController::class, 'about');

//Route::get('article/{id}', HomeController::class, 'article');
Route::get('article/{id}', fn($id) => $id);
