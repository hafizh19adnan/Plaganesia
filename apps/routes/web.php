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

Route::get('/','baseController@index');
Route::get('/home','baseController@index');
Route::get('/view-peta','baseController@view_peta');
Route::get('/berita','baseController@berita');
Route::get('/public-info','baseController@public_info');
Route::get('/dashboard-gov','baseController@dashboard_gov');
Route::get('/login','baseController@login');
Route::get('/tes','baseController@login');
