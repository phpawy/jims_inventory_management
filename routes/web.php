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
Route::get('categories/create', 'CategoriesController@getCreate')->name('categories.create');
Route::post('categories/create', 'CategoriesController@postCreate')->name('categories.create');
Route::get('categories/{id}/edit', 'CategoriesController@getEdit')->name('categories.edit');
Route::post('categories/{id}/edit', 'CategoriesController@postEdit')->name('categories.edit');
Route::get('categories/{id}/delete', 'CategoriesController@getDelete')->name('categories.delete');
Route::post('categories/{id}/delete', 'CategoriesController@postDelete')->name('categories.delete');

Route::get('attributes/list', 'AttributeController@getList')->name('attributes.list');
Route::get('attributes/create', 'AttributeController@getCreate')->name('attributes.create');

Route::get('products/list', 'ProductsController@getList')->name('products.list');
Route::get('products/create', 'ProductsController@getCreate')->name('products.create');
