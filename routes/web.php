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
Route::resource('materia', App\Http\Controllers\materiaController::class);
Route::resource('matricula_materia', App\Http\Controllers\matricula_materia::class);
Route::resource('materia', App\Http\Controllers\materiaController::class);
Route::resource('materia', App\Http\Controllers\materiaController::class);

