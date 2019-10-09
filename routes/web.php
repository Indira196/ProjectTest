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

Route::get('/','berandaC@index');
Route::get('/formTambahData', 'berandaC@formTambahData');
Route::post('/simpanData','berandaC@simpanData');
Route::get('/formEditData/{id}','berandaC@formEditData');
Route::post('/editData','berandaC@editData');
Route::get('/formHapusData/{id}','berandaC@formHapusData');
Route::post('/hapusData/{id}','berandaC@hapusData');

