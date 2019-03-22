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
    return view('welcome');
});

Route::get('/equipebl1', 'EquipeController1@create');
Route::post('/equipebl1', 'EquipeController1@store');

Route::get('/equipebl2', 'EquipeController2@create');
Route::post('/equipebl2', 'EquipeController2@store');

Route::get('/equipebl3', 'EquipeController3@create');
Route::post('/equipebl3', 'EquipeController3@store');

Route::get('/equipero1', 'EquipeController4@create');
Route::post('/equipero1', 'EquipeController4@store');

Route::get('/equipero2', 'EquipeController5@create');
Route::post('/equipero2', 'EquipeController5@store');

Route::get('/equipero3', 'EquipeController6@create');
Route::post('/equipero3', 'EquipeController6@store');

Route::get('/equipeve1', 'EquipeController7@create');
Route::post('/equipeve1', 'EquipeController7@store');

Route::get('/equipeve2', 'EquipeController8@create');
Route::post('/equipeve2', 'EquipeController8@store');

Route::get('/equipeve3', 'EquipeController9@create');
Route::post('/equipeve3', 'EquipeController9@store');

Route::get('/equipeja1', 'EquipeController10@create');
Route::post('/equipeja1', 'EquipeController10@store');

Route::get('/equipeja2', 'EquipeController11@create');
Route::post('/equipeja2', 'EquipeController11@store');

Route::get('/equipeja3', 'EquipeController12@create');
Route::post('/equipeja3', 'EquipeController12@store');

Route::get('/equipevi1', 'EquipeController13@create');
Route::post('/equipevi1', 'EquipeController13@store');

Route::get('/equipevi2', 'EquipeController14@create');
Route::post('/equipevi2', 'EquipeController14@store');

Route::get('/equipevi3', 'EquipeController15@create');
Route::post('/equipevi3', 'EquipeController15@store');

Route::get('/equipebl4', 'EquipeController16@create');
Route::post('/equipebl4', 'EquipeController16@store');

Route::get('/equipero4', 'EquipeController17@create');
Route::post('/equipero4', 'EquipeController17@store');

Route::get('/equipeve4', 'EquipeController18@create');
Route::post('/equipeve4', 'EquipeController18@store');

Route::get('/equipeja4', 'EquipeController19@create');
Route::post('/equipeja4', 'EquipeController19@store');

Route::get('/equipevi4', 'EquipeController20@create');
Route::post('/equipevi4', 'EquipeController20@store');

Route::get('/equipebl5', 'EquipeController21@create');
Route::post('/equipebl5', 'EquipeController21@store');

Route::get('/equipero5', 'EquipeController22@create');
Route::post('/equipero5', 'EquipeController22@store');

Route::get('/equipeve5', 'EquipeController23@create');
Route::post('/equipeve5', 'EquipeController23@store');

Route::get('/equipeja5', 'EquipeController24@create');
Route::post('/equipeja5', 'EquipeController24@store');

Route::get('/equipevi5', 'EquipeController25@create');
Route::post('/equipevi5', 'EquipeController25@store');
