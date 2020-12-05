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


//Post route
Route::post('crud-add','CrudController@createCrudData');


