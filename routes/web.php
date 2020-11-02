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
    return view('index');
});
Route::resource('gallery', 'GalleryController');
Route::resource('contact', 'ContactController');
Route::resource('user', 'UserController');
Route::resource('link', 'LinkController');
Route::resource('portfolio', 'PortfolioController');
Route::resource('category', 'CategoryController');
Route::resource('footer', 'LogoController');
Route::resource('service', 'ServiceController');
Route::get('subscriber', 'SubscriberController@getmessages');
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
