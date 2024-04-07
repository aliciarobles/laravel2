<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestamoCRUDController;
use App\Http\Controllers\LibroCRUDController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [Controller::class,'home']);

Route::get('/addLibro', [LibroCRUDController::class,'mostrarFormularioAdd']);
Route::post('/addLibroPost', [LibroCRUDController::class,'AddLibro'])->name('AddLibro');
Route::get('/libros', [LibroCRUDController::class, 'todos']);
Route::get('/libros/{id}', [LibroCRUDController::class, 'detalleslibro']);
Route::get('/libros/{id}/editar', [LibroCRUDController::class, 'editarLibro']);
Route::put('/libros/{id}', [LibroCRUDController::class, 'update'])->name('update');

Route::get('/prestamos', [PrestamoCRUDController::class, 'index'])->name('index');
Route::get('/prestamos/create', [PrestamoCRUDController::class, 'create'])->name('create');
Route::post('/prestamos', [PrestamoCRUDController::class, 'store'])->name('store');
Route::get('/prestamos/{id}', [PrestamoCRUDController::class, 'show'])->name('show');
Route::delete('/borrarprestamos/{id}', [PrestamoCRUDController::class, 'eliminar'])->name('eliminar');
