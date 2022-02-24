<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SesionController;
use App\Http\Controllers\UserController;

Route::view('/', 'home')->name('home');
Route::view('sesion', 'sesion')->name('sesion');

// Route::post('sesion', [SesionController::class, 'store']);
Route::view('nuevoUser', 'nuevoUser')->name('nuevoUser');

Route::post('home', [UserController::class, 'insertt'])->name('insertt');


// Route::post('publicacion', [SesionController::class, 'login'])->name('login');
// Route::view('publicacion', 'publicacion')->name('publicaciones');

Route::get('publicacion', [SesionController::class, 'ver'])->name('publicacion.ver');
Route::post('publicacion', [SesionController::class, 'login'])->name('publicacion.login');
