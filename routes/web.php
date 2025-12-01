<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rutas del menú
Route::get('/', [PageController::class, 'inicio'])->name('inicio');
Route::get('/fotos', [PageController::class, 'fotos'])->name('fotos');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');