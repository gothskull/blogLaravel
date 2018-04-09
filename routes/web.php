<?php
Route::get('/', function () {

	$posts = App\Post::latest('published_at')->get();//SE LE COLOCA APP\ PORQUE ES EL NAMESPACE DE POST EN LA RUTA app/Post

    return view('inicio',compact('posts'));
})->name('inicio');

Route::get('admin',function(){
	return view('admin');
})->name('admin');

Route::get('posts',function(){
	return App\Post::all();
});

Route::get('escritorio',function(){
	return view('escritorio');
})->name('escritorio');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');