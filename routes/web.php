<?php

use Illuminate\Support\Facades\Route;

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


// landing page
Route::get('/', 'landingpagecontroller@landingpage');


// client page
Route::get('/index', 'clientcontroller@index');


// history page
Route::get('/history', 'historycontroller@history');

Route::post('/changeCheck', 'historycontroller@changeCheck');


// login page
Route::get('/login', 'logincontroller@login');

Route::post('/loginCheck', 'logincontroller@loginCheck');


// register page
Route::get('/register', 'registercontroller@register');

Route::post('/registerData', 'registercontroller@registerData');


// create page
Route::get('/create', 'createcontroller@create');

Route::post('/registerevent', 'createcontroller@registerevent');


// need page
Route::get('/need', 'needcontroller@need');


// change page
Route::get('/change', 'changecontroller@change');

Route::post('/changeRequest', 'changecontroller@changeRequest');


// cart page
Route::get('/cart', 'cartcontroller@cart');