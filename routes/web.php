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
Route::get('imprimir1', [App\Http\Controllers\materiaController::class, 'imprimir'])->name('imprimir.materias');

Route::resource('matricula_materia', App\Http\Controllers\matricula_materia::class);
Route::get('imprimir1', [App\Http\Controllers\matricula_materia::class, 'imprimir'])->name('imprimir.matriculas');

Route::resource('periodos_academico', App\Http\Controllers\periodos_academicoController::class);
Route::get('imprimir1', [App\Http\Controllers\periodos_academicoController::class, 'imprimir'])->name('imprimir.periodos');

Route::resource('user', App\Http\Controllers\userController::class);
Route::get('imprimir1', [App\Http\Controllers\userController::class, 'imprimir'])->name('imprimir.user');


