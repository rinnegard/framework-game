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
})->name("welcome");

Route::get('/hello', function () {
    return view('hello', ["name" => "World"]);
})->name("hello");;

Route::get('/game21', function () {
    return view('game21');
})->name("game21");;
