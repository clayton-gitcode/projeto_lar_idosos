<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/**
 * Define as rotas web da aplicação.
 *
 * - Rota '/dashboard': Exibe a view 'dashboard' para usuários autenticados.
 * - Grupo de rotas com middleware 'guest':
 *     - GET '/login': Exibe o formulário de login utilizando o método 'index' do LoginController.
 *     - POST '/login': Processa o login utilizando o método 'login' do LoginController.
 *
 * As rotas protegidas pelo middleware 'guest' só podem ser acessadas por usuários não autenticados.
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

/**
 * Rotas protegidas por autenticação para gerenciamento de pacientes.
 *
 * - GET  /dashboard: Exibe o painel principal do sistema.
 * - GET  /pacientes/create: Exibe o formulário para cadastro de um novo paciente.
 * - POST /pacientes/create: Processa o cadastro de um novo paciente.
 * - GET  /pacientes/list: Lista todos os pacientes cadastrados.
 * - GET  /pacientes/{paciente}/imprimir: Gera uma versão para impressão dos dados do paciente.
 * - GET  /pacientes/{paciente}/edit: Exibe o formulário para edição dos dados de um paciente.
 * - PUT  /pacientes/{paciente}/edit: Atualiza os dados do paciente.
 * - DELETE /pacientes/{paciente}: Remove um paciente do sistema.
 *
 * Todas as rotas deste grupo requerem que o usuário esteja autenticado.
 */
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
