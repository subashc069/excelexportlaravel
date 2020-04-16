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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UsersController@index')->name('index');
Route::get('export', 'UsersController@export')->name('export');
Route::get('export_view', 'UsersController@export_view')->name('export_view');
Route::get('export_format/{format}', 'UsersController@export_format')->name('export_format');
Route::get('export_sheets', 'UsersController@export_sheets')->name('export_sheets');