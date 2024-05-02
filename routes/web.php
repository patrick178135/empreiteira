<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CidadeController; 
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SolicitacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('cidades', CidadeController::class);
Route::resource('funcionarios', FuncionarioController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('contratos', ContratoController::class);
Route::resource('servicos', ServicoController::class);
Route::resource('solicitacoes', SolicitacaoController::class);

require __DIR__.'/auth.php';
