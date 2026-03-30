<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeuController;

Route::get('/', [MeuController::class, 'mostraTela']);
Route::get('/produtos', [MeuController::class, 'mostraProdutos']);
Route::get('/formulario', [MeuController::class, 'mostraFormulario']);
Route::post('/formulario', [MeuController::class, 'processaFormulario']);
Route::delete('/produtos_remover/{id_excluir}', [MeuController::class, 'deletaProduto']);
