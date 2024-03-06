<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;

/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', [EmpleadosController::class, 'index'])->name('home');
Route::post('/store', [EmpleadosController::class, 'store'])->name('myStore');
Route::get('/empleado/show/{id}', [EmpleadosController::class, 'show'])->name('myShow');
Route::delete('/empleado/delete/{id}', [EmpleadosController::class, 'destroy'])->name('mydestroy');
Route::get('/empleado/edit/{id}', [EmpleadosController::class, 'edit'])->name('myEdit');
Route::put('/empleado/update/{id}', [EmpleadosController::class, 'update'])->name('myUpdate');

/*
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    */

// Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');
