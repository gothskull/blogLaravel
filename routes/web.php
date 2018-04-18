<?php
Route::get('/', 'HomeController@home')->name('inicio')->middleware('auth');

// ADMINISTRACIÓN
Route::group([
	'prefix'     => 'admin',
	'namespace'  => 'Admin',
	'middleware' => 'auth',
],function(){
	Route::get('/','AdminController@home')->name('home');
	Route::get('listar','AdminController@index')->name('admin.pages.listar');
	Route::get('crear','AdminController@crear')->name('admin.pages.crear');
	Route::post('store','AdminController@store')->name('admin.pages.store');
});


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');