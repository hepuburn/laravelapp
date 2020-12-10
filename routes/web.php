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



// パスが足りない
// Route::get('hello', 'HelloController@index'); 
// Route::get('hello/{id?}/{pass?}', 'App\Http\Controllers\HelloController@index');

Route::get('hello', function() {
    return view('hello.index');
 });
 