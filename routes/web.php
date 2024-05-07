<?php

use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\ReportesController;
use Illuminate\Support\Facades\Route;




Route::get('/',[EmpleadosController::class,'index'])->name('empleados.index');
Route::get('/create',[EmpleadosController::class,'create'])->name('empleados.create');
Route::post('/store',[EmpleadosController::class,'store'])->name('empleados.store');
Route::get('/edit',[EmpleadosController::class,'edit'])->name('empleados.edit');
Route::get('/delete',[EmpleadosController::class,'show'])->name('empleados.show');

Route::get('/reportes',[EmpleadosController::class,'reportes'])->name('empleados.reportes');

