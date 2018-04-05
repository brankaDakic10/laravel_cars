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
///added use 
use App\Car;

Route::get('/', function () {
    $name='Cars Project';
    $age=25;
    return view('welcome', compact(['name','age']));
});
//about page
Route::get('/about', function () {
    return view('about');
});
// for all cars
Route::get('/cars','CarsController@index')->name('all-cars');
////for single car
Route::get('/cars/{id}','CarsController@show' )->name('single-car');

   
