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

/**
 *	Auth
 */

Route::get('/login', 'AuthController@login')->name('site.auth.login');
Route::post('/login', 'AuthController@loginPost')->name('site.auth.loginPost');

Route::get('/register', 'AuthController@register')->name('site.auth.register');
Route::post('/register', 'AuthController@registerPost')->name('site.auth.registerPost');

Route::get('/logout', 'AuthController@logout')->name('site.auth.logout');

/**
 *	Verification User Email
 */

Route::get('/verification/email/{token}', 'AuthController@verification')->name('site.auth.verification');

/**
 *	Forgot Password
 */

Route::prefix('password')->group(function ()
{
	Route::get('reset', 'Auth\ForgotPasswordController@showLinkRequestForm')
		->name('password.request');

	Route::get('reset/{token}', 'Auth\ResetPasswordController@showResetForm')
		->name('password.reset');

	Route::post('email', 'Auth\ForgotPasswordController@sendResetLinkEmail')
		->name('password.email');

	Route::post('reset', 'Auth\ResetPasswordController@reset');
});

/**
 *
 */

Route::get('/', 'IndexController@index')
	->middleware('check', 'status')
	->name('site.home');

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 *	Voyager
 */

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
