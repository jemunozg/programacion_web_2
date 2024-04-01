<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::getprefix('productos')->group(funtion(){
    Route::get('/',[ProductosController::class,'index'])->name('productos.index');
    Route::get('crear',[ProductosController::class,'create'])->name('productos.create');
    Route::post('store',[ProductosController::class,'store'])->name('productos.store');
    Route::get('editar/{id}',[ProductosController::class,'edit'])->name('productos.edit');
    Route::put('actualizar/{id}',[ProductosController::class,'update'])->name('productos.update');
    Route::delete('eliminar/{id}',[ProductosController::class,'destroy'])->name('productos.destroy');    
});
*/

Route::resource('productos','\App\Http\Controllers\ProductosController'); //Pasamos el nombre del controlador completo