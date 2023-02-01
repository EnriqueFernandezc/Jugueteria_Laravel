<?php

use App\Http\Controllers\ContactController;
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

// se protegen todas las rutas que tienen acceso a bd
// el middleware permite acceder a estas funciones solo a usuarios autenticados
Route::group(['middleware' => 'auth'], function () {
    Route::get('/toycreate', [ToyController::class, 'create'])->name('toycreate');
    // crear una ruta post para el formulario que esta en la vista toycreate
    Route::post('/toystore', [ToyController::class, 'store'])->name('toystore');
    Route::get('/toyedit/{toy}', [ToyController::class, 'edit'])->name('toyedit');
    // crear una ruta post para el formulario que esta en la vista toyedit
    Route::post('/toyupdate/{toy}', [ToyController::class, 'update'])->name('toyupdate');
    Route::post('/toydestroy/{toy}', [ToyController::class, 'destroy'])->name('toydestroy');
});

Route::get('/contactcreate', [ContactController::class, 'create'])->name('contactcreate');
Route::post('/contactstore', [ContactController::class, 'store'])->name('contactstore');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
