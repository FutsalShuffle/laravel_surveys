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


Route::get('/', 'Main@index');
Route::post('/', 'Main@store');

Route::get('/survey/{id}', 'Surveys@show');
Route::post('/survey/{id}', 'Surveys@store');

Route::get('/survey/{id}/result', 'Results@show');
