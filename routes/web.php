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
    return view('dashboard');
});

Route::get('categories/list', 'CategoriesController@getList')->name('categories.list');
Route::get('categories/new', 'CategoriesController@getCreate')->name('categories.create');

Route::get('attributes/list', 'AttributeController@getList')->name('attributes.list');
Route::get('attributes/new', 'AttributeController@getCreate')->name('attributes.create');

Route::get('products/list', 'ProductsController@getList')->name('products.list');
Route::get('products/new', 'ProductsController@getCreate')->name('products.create');
