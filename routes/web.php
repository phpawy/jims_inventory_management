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
Route::post('attributes/create', 'AttributeController@postCreate')->name('attributes.create');
Route::get('attributes/{id}/edit', 'AttributeController@getEdit')->name('attributes.edit');
Route::post('attributes/{id}/edit', 'AttributeController@postEdit')->name('attributes.edit');
Route::get('attributes/{id}/delete', 'AttributeController@getDelete')->name('attributes.delete');
Route::post('attributes/{id}/delete', 'AttributeController@postDelete')->name('attributes.delete');

Route::get('products/list', 'ProductsController@getList')->name('products.list');
Route::get('products/create', 'ProductsController@getCreate')->name('products.create');
Route::post('products/create', 'ProductsController@postCreate')->name('products.create');
Route::get('products/{id}/edit', 'ProductsController@getEdit')->name('products.edit');
Route::post('products/{id}/edit', 'ProductsController@postEdit')->name('products.edit');
Route::get('products/{id}/delete', 'ProductsController@getDelete')->name('products.delete');
Route::post('products/{id}/delete', 'ProductsController@postDelete')->name('products.delete');

Route::get('suppliers/list', 'SuppliersController@getList')->name('suppliers.list');
Route::get('suppliers/create', 'SuppliersController@getCreate')->name('suppliers.create');
Route::post('suppliers/create', 'SuppliersController@postCreate')->name('suppliers.create');
Route::get('suppliers/{id}/edit', 'SuppliersController@getEdit')->name('suppliers.edit');
Route::post('suppliers/{id}/edit', 'SuppliersController@postEdit')->name('suppliers.edit');
Route::get('suppliers/{id}/delete', 'SuppliersController@getDelete')->name('suppliers.delete');
Route::post('suppliers/{id}/delete', 'SuppliersController@postDelete')->name('suppliers.delete');

Route::get('customers/list', 'CustomersController@getList')->name('customers.list');
Route::get('customers/create', 'CustomersController@getCreate')->name('customers.create');
Route::post('customers/create', 'CustomersController@postCreate')->name('customers.create');
Route::get('customers/{id}/edit', 'CustomersController@getEdit')->name('customers.edit');
Route::post('customers/{id}/edit', 'CustomersController@postEdit')->name('customers.edit');
Route::get('customers/{id}/delete', 'CustomersController@getDelete')->name('customers.delete');
Route::post('customers/{id}/delete', 'CustomersController@postDelete')->name('customers.delete');

Route::get('locations/list', 'LocationsController@getList')->name('locations.list');
Route::get('locations/create', 'LocationsController@getCreate')->name('locations.create');
Route::post('locations/create', 'LocationsController@postCreate')->name('locations.create');
Route::get('locations/{id}/edit', 'LocationsController@getEdit')->name('locations.edit');
Route::post('locations/{id}/edit', 'LocationsController@postEdit')->name('locations.edit');
Route::get('locations/{id}/delete', 'LocationsController@getDelete')->name('locations.delete');
Route::post('locations/{id}/delete', 'LocationsController@postDelete')->name('locations.delete');
