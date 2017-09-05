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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

//news
Route::group(['middleware' => ['auth']], function (){
    Route::get('product', 'ProductController@index');

    Route::get('news', 'NewsController@index');
    Route::get('news/create', 'NewsController@create');
    Route::post('news', 'NewsController@store');
    Route::get('news/{id}/edit', 'NewsController@edit');
    Route::patch('news/{id}', 'NewsController@update');
    Route::delete('news/{id}', 'NewsController@destroy');

    //Admin
    Route::group(['middleware' => ['checkAdmin']], function (){
        Route::get('admin', 'Admin\DashboardController@index');
        Route::get('admin/user', 'Admin\UserController@index');
        Route::get('admin/user/add', 'Admin\UserController@create');
        Route::post('admin/user', 'Admin\UserController@store');

    });
});

