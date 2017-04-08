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
    return view('pages.public.landing-page');
});

# Auth
Auth::routes();
Route::get('register/verify/{token}', 'Auth\VerifyController@verify');

# Dashboard
Route::get('/dashboard', 'DashboardController@index');

# OAuth
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

# Test
Route::get('emailverification', function() {
	return view('emails.auth.email-verification');
});