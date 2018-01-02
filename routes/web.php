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


//Post links
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('blog/', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
Route::get('about', 'PagesController@getAbout');
Route::post('about', 'PagesController@postContact');
Route::get('post', 'PagesController@getPost');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostController');

//Login routes
Route::get('auth/login', ['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', ['as'=>'logout','uses'=>'Auth\LoginController@logout']);
//Register routes
Route::get('auth/register', ['as'=>'register','uses'=>'Auth\RegisterController@showRegistrationForm']);
Route::post('auth/register', 'Auth\RegisterController@register');

//Password resets
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Categories routes
Route::resource('categories','CategoryController',['except'=>['create']]);

//Tags routes
Route::resource('tags','TagController',['except'=>['create']]);

