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

// Auth::routes();

//Actual loaded route for the backend
Route::get('/admin/{any}', 'PagesController@backend')->where('any', '.*');

//Actual loaded route for the frontend
Route::get('/{any}', 'PagesController@frontend')->where('any', '.*');

//
