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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/reglement', function () {
    return view('reglement');
});

Route::get('/enseignant', function () {
    return view('enseignant');
});


Route::get('/mentions', function () {
    return view('mentions');
});


Route::get('/connexion', function () {
    return view('connexion');
});
