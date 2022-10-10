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

Route::get('/', function () {
    return view('welcome');
});

//users portfolio general
Route::get('/user', function() { return view('Userportfolio.portfolio');});

//users platform eitehr on facebook,instagram,twitter and their contact number
Route::get('/facebook', function () {return view('Userportfolio.facebookpage');});
Route::get('/twitter', function () {return view('Userportfolio.twitterpage');});
Route::get('/instagram', function () {return view('Userportfolio.instagrampage');});
Route::get('/contactnumber', function () {return view('Userportfolio.contactnumberpage');});


 