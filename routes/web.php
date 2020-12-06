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

//Student Route
Route::get('crud-app','CrudController@showForm');
Route::get('crud-all','CrudController@showData');
Route::get('crud-single/{id}','CrudController@showSingleData');
Route::get('crud-delete/{id}','CrudController@deleteSingleData');
Route::get('crud-edit/{id}','CrudController@editSingleData');
Route::patch('crud-update/{id}','CrudController@updateSingleData');



//Post route
Route::post('crud-add','CrudController@createCrudData');


