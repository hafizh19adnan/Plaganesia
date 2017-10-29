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
Route::get('/addLaporan','baseController@addLaporan');
Route::get('/view-peta','baseController@view_peta');
Route::get('/berita','baseController@berita');
Route::get('/public-info','baseController@public_info');
Route::get('/dashboard-gov','baseController@dashboard_gov');
Route::get('/login','baseController@login');
Route::get('/tes','baseController@login');
Route::get('/dashboard-surveyor','baseController@listSurveyOfSurveyor');
Route::get('/daftar-laporan','baseController@daftarLaporan');
Route::get('/daftar-survey','baseController@daftarSurvey');
Route::get('/buat-survey','baseController@buatSurvey');
Route::get('/isi-survey','baseController@isiSurvey');
Route::get('/list-survey','baseController@listSurveyOfSurveyor');
Route::post('/login-action','baseController@loginAction');
Route::get('/logout','baseController@logout');
Route::get('/dashboard-gov-jakarta','baseController@jakarta_gov');
Route::post('/tambahSurvey', 'baseController@tambahSurvey');
Route::post('/isi-sampel', 'baseController@isiSampel');



