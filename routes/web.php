<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index']);
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', [HomeController::class, 'contact']);
