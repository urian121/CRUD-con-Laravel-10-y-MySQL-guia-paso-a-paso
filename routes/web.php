<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;


Route::get('/', [EmpleadosController::class, 'index'])->name('home');
Route::post('/store', [EmpleadosController::class, 'store'])->name('myStore');
Route::get('/empleado/show/{id}', [EmpleadosController::class, 'show'])->name('myShow');
Route::delete('/empleado/delete/{id}', [EmpleadosController::class, 'destroy'])->name('myDestroy');
Route::get('/empleado/edit/{id}', [EmpleadosController::class, 'edit'])->name('myEdit');
Route::put('/empleado/update/{id}', [EmpleadosController::class, 'update'])->name('myUpdate');
