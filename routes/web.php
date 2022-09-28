<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; //add ProductController
 
//Route::get('/', function () {
//    return view('welcome');
//});
 
Route::get('/', 'ProductControler@index')->name('index');
Route::get('/create', 'ProductControler@create')->name('create');
Route::post('store/', 'ProductControler@store')->name('store');
Route::get('show/{product}', 'ProductControler@show')->name('show');
Route::get('edit/{product}', 'ProductControler@edit')->name('edit');
Route::put('edit/{product}','ProductControler@update')->name('update');
Route::delete('/{product}','ProductControler@destroy')->name('destroy');