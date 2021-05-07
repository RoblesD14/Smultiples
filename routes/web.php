<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('empleado', EmpleadoController::class)->middleware('auth');
Auth::routes(['register'=>true,'reset'=>false]);
Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'], function () {
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
    Route::get('/', [ClienteController::class, 'index'])->name('home');
});
Route::resource('clientes', ClienteController::class)->middleware('auth');
