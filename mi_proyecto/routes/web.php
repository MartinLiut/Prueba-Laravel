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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as'   => 'admin.users.destroy'
	]);
});

Route::group(['prefix' => 'admin'], function(){
	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as'   => 'admin.categories.destroy'
	]);
});

Route::group(['prefix' => 'articles'], function(){
	Route::get('view/{id}', [
		'uses' => 'TestController@view',
		'as'   => 'articlesView'
	]);
});

/*Auth::routes();*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/auth/login', [
    'uses'  => 'Auth\LoginController@showLoginForm',
    'as'    => 'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses'  => 'Auth\LoginController@login',
    'as'    => 'admin.auth.login'
]);

Route::get('admin/auth/logout', [
    'uses'  => 'Auth\LoginController@logout',
    'as'    => 'admin.auth.logout'
]);
