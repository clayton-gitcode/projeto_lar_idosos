<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');

    Route::post('/pacientes/create', [PacienteController::class, 'store']);

    Route::get('/pacientes/list', [PacienteController::class, 'show'])->name('pacientes.list');
    Route::get('/pacientes/{paciente}/imprimir', [PacienteController::class, 'imprimir'])->name('pacientes.imprimir');

    Route::get('/pacientes/{paciente}/edit', [PacienteController::class, 'edit'])->name('pacientes.edit');

    Route::put('/pacientes/{paciente}/edit', [PacienteController::class, 'update']);

    Route::delete('/pacientes/{paciente}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');
});
