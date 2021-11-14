<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\YatzyController;

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
    return view('hello', ["name" => "World"]);
})->name("hello");;

Route::get('/game21', [GameController::class, 'start'])->name("game21");
Route::get('/yatzy', [YatzyController::class, 'start'])->name("yatzy");
Route::post('/yatzy', [YatzyController::class, 'run'])->name("yatzy");
