<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/user', 'Usercontroller@index');
Route::post('/upload', function (Request $request){
  
   $request->image->store('images','public');
    return 'uploaded!';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/create', 'ProductController@store')->name('product.store');

