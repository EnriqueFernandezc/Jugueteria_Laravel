<?php

use App\Http\Controllers\ToyController;
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
    // se cambia welcome por la vista home con fortify
    // return view('welcome');
    return view('home'); 
})->name('inicio');

Route::get('/toyindex', [ToyController::class, 'index'])->name('toyindex');
Route::get('/toyshow/{toy}', [ToyController::class, 'show'])->name('toyshow'); //{toy} es el nombre del objeto que la ruta debe cargar


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
