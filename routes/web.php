<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use \App\Http\Controllers\categoryController;
use \App\Http\Controllers\newsController;
use \App\Http\Controllers\addOrderController;
use \App\Http\Controllers\addController;
use \App\Http\Controllers\createController;
use \App\Http\Controllers\admin\categoryController as AdminCategoryController;
use \App\Http\Controllers\admin\newsController as AdminNewsController;
use \App\Http\Controllers\Acc\AccountController as AccountController;
use \App\Http\Controllers\admin\ProfileController as ProfileController;
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

Route::get('/category/{id}', [categoryController::class, 'catNews'])->name('catNews');

Route::get('/news/{id}', [newsController::class, 'news']);

Route::get('/news', [newsController::class, 'index'])->name('news');

Route::get('/add', [createController::class, 'index']);
Route::post('/add', [createController::class, 'store'])->name('store');

Route::get('/addorder', [addOrderController::class, 'index']);

Route::post('/addorder',[addOrderController::class, 'store'])->name('orderstore');

//admin routes
Route::group(['middleware' => 'auth'], function (){
    Route::get('/account', AccountController::class)->name('account');

    Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('/category', AdminCategoryController::class);
        Route::resource('/news', AdminNewsController::class);
        });
    Route::match(['get', 'post'],'/profile', [ProfileController::class, 'update']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
