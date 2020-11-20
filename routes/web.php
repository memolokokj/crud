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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact','App\Http\Controllers\WebController@contact');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function(){


	Route::get('/movies','App\Http\Controllers\MovieController@index')->name('movies');
	Route::post('/movies','App\Http\Controllers\MovieController@store');
	
	Route::get('/categories','App\Http\Controllers\CategoryController@index');
	Route::put('/categories','App\Http\Controllers\CategoryController@update');
	Route::post('/categories','App\Http\Controllers\CategoryController@store');
	Route::delete('/categories','App\Http\Controllers\CategoryController@destroy');
});
