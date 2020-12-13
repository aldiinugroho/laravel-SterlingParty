<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checkClient;

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
Route::get('/index', 'clientcontroller@index')->middleware(checkClient::class);

Route::get('/logout', 'clientcontroller@logout')->middleware(checkClient::class);


// history page
Route::get('/history', 'historycontroller@history')->middleware(checkClient::class);

Route::post('/changeCheck', 'historycontroller@changeCheck')->middleware(checkClient::class);


// login page
Route::get('/login', 'logincontroller@login');

Route::post('/loginCheck', 'logincontroller@loginCheck');


// register page
Route::get('/register', 'registercontroller@register');

Route::post('/registerData', 'registercontroller@registerData');


// create page
Route::get('/create', 'createcontroller@create')->middleware(checkClient::class);

Route::post('/registerevent', 'createcontroller@registerevent')->middleware(checkClient::class);


// need page
Route::get('/need', 'needcontroller@need')->middleware(checkClient::class);


// change page
Route::get('/change', 'changecontroller@change')->middleware(checkClient::class);

Route::post('/changeRequest', 'changecontroller@changeRequest')->middleware(checkClient::class);


// cart page
Route::get('/cart', 'cartcontroller@cart')->middleware(checkClient::class);

Route::post('//addtocart/{Item_ID}', 'cartcontroller@countcart')->middleware(checkClient::class);