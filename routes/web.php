<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\LoginController@index');

Route::get('sign_up', 'App\Http\Controllers\LoginController@register_form');
Route::post('sign_up', 'App\Http\Controllers\LoginController@do_register_form');
Route::get('sign_up/check/{campo}', 'App\Http\Controllers\LoginController@check');

Route::get('login', 'App\Http\Controllers\LoginController@login_form');
Route::post('login', 'App\Http\Controllers\LoginController@do_login_form');


Route::get('logout', 'App\Http\Controllers\LoginController@logout');

Route::get('home', 'App\Http\Controllers\HomeController@home');
Route::get('shop', 'App\Http\Controllers\HomeController@shop');
Route::get('contact', 'App\Http\Controllers\HomeController@contact');
Route::get('about', 'App\Http\Controllers\HomeController@about');
Route::get('account', 'App\Http\Controllers\HomeController@account');
Route::get('account/data', 'App\Http\Controllers\HomeController@account_data');
Route::get('account/data/{ordId}/{useId}', 'App\Http\Controllers\HomeController@account_data_receive');

Route::get('cart', 'App\Http\Controllers\HomeController@cart');
Route::post('cart/insert', 'App\Http\Controllers\InsertController@insert');

