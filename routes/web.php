<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/registro', [UsuarioController::class, 'create'])->name('registro.form');
Route::post('/registro', [UsuarioController::class, 'store'])->name('registro.store');

Route::get('/', function () {
return view('front.index');
});

Route::get('/', function () {
return view('front.login');
});

Route::get('/', function () {
return view('front.nosotros');
});

Route::get('/', function () {
return view('front.contacto');
});


