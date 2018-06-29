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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Only Authenticated user can access this page!
Route::group(['middleware' => ['auth']], function() {
	Route::get('product/total', 'ProductController@total');
    Route::resource('product', 'ProductController');
    Route::resource('laptop', 'LaptopCategoryController');
    Route::resource('cellphone', 'CellphoneCategoryController');
});

