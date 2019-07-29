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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index')->name('home');


Route::get('admin', 'Admin\LoginController@showLoginForm');
Route::post('admin',  'Admin\LoginController@login');
 

// Registration Routes...
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm');
Route::post('admin/register', 'Admin\RegisterController@register');

// Password Reset Routes...
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail');
Route::get('admin-password/reset/{token}',  'Admin\ResetPasswordController@showResetForm');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');
