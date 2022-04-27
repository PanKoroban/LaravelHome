<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hellow/{name}', function (string $name) {
    return 'Hellow '.$name;
}); // страница приветствия

Route::get('/info/', function () {
    return 'Информация о проекте';
}); 

Route::get('/news/', function () {
    return 'All News';
});

Route::get('/news/{id}', function ($id) {
    return 'News #'.$id;
});