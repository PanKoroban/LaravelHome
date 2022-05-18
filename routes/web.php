<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use \App\Http\Controllers\categoryController;
use \App\Http\Controllers\newsController;
use \App\Http\Controllers\addOrderController;
use \App\Http\Controllers\addController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [welcomeController::class, 'index']);

Route::get('/category', [categoryController::class, 'index']);

Route::get('/category/{id}', [categoryController::class, 'catNews']);

Route::get('/news/{id}', [newsController::class, 'news']);

Route::get('/news', [newsController::class, 'index']);

Route::get('/add', [addController::class, 'index']);

Route::get('/addorder', [addOrderController::class, 'index']);


