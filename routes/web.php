<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;


Route::get('/', function () {
    return view('home');
});


//Route::resource('/empleados', EmpleadosController::class);
Route::get('/empleados', [EmpleadosController::class, 'index'])->name('empleados.index');
