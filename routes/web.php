<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');

Route::post('/pacientes/create', [PacienteController::class, 'store']);

Route::get('/pacientes/list', [PacienteController::class, 'show'])->name('pacientes.list');