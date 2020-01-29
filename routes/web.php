<?php

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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');


// Эта запись создает автоматически записи Роутов. Можно посмотреть весь список командой
// php artisan route:list
Route::resource('posts', 'PostsController');


// Так можно передавать параметры
Route::get('/users/{id}/{name}', function ($id, $name) {
    return "This is user id $id, e.g. $name";
});


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
