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

Route::get('/', function () {return redirect('brands');});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//BRANDS
Route::get('/brands','BrandController@index');
// Auth Middleware Brands
Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/brands/create', 'BrandController@create');
    Route::post('/brands', 'BrandController@store');
    Route::get('/brands/truncate','BrandController@truncate');
    Route::get('/brands/{brand}/edit', 'BrandController@edit');
    Route::put('/brands/{brand}', 'BrandController@update');
    Route::delete('/brands/{brand}', 'BrandController@destroy');
});
Route::get('/brands/{brand}','BrandController@show');


//CARS
Route::get('/cars','CarController@index');
// Auth Middleware Cars
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/cars/create', 'CarController@create');
    Route::post('/cars', 'CarController@store');
    Route::get('/cars/truncate','CarController@truncate');
    Route::get('/cars/{brand}/edit', 'CarController@edit');
    Route::put('/cars/{brand}', 'CarController@update');
    Route::delete('/cars/{brand}', 'CarController@destroy');
});
Route::get('/cars/{car}','CarController@show');




//Route::get('/brands/create','BrandController@create');
//Route::post('/brands','BrandController@store');
//Route::get('/brands/truncate','BrandController@truncate');
//Route::get('/brands/search','BrandController@search'); // antes de passar parametros!
//Route::get('/brands/{brand}','BrandController@show');
//Route::get('/brands/{brand}/edit','BrandController@edit');
//Route::put('/brands/{brand}','BrandController@update');
//Route::delete('/brands/{brand}','BrandController@destroy');

//Route::get('/cars','CarController@index');
//Route::get('/cars/create','CarController@create');
//Route::post('/cars','CarController@store');
//Route::get('/cars/truncate','CarController@truncate');
//Route::get('/cars/{car}','CarController@show');
//Route::get('/cars/{car}/edit','CarController@edit');
//Route::put('/cars/{car}','CarController@update');
//Route::delete('/cars/{car}','CarController@destroy');

