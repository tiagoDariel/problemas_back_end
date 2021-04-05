<?php

use App\Http\Controllers\biblioteca\BibliotecaController;
use App\Http\Controllers\FibonacciController;
use App\Http\Controllers\MatrizController;
use App\Http\Controllers\MedidasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// biblioteca
Route::get('/biblioteca-livro', [BibliotecaController::class, 'listLivro']);
Route::get('/biblioteca-usuario', [BibliotecaController::class, 'listUsuario']);
Route::post('/biblioteca-save-livro', [BibliotecaController::class, 'createLivro']);
Route::put('/biblioteca-update-livro/{id}', [BibliotecaController::class, 'updateLivro']);
Route::get('/biblioteca-usuario/{id}', [BibliotecaController::class, 'print']);
Route::post('/biblioteca-save-usuario', [BibliotecaController::class, 'createUsuario']);
Route::post('/biblioteca-emprestimo', [BibliotecaController::class, 'emprestimo']);

//medir altura
Route::get('/medidas-list', [MedidasController::class, 'listMedidas']);
Route::post('/medidas-save', [MedidasController::class, 'addMedidas']);
Route::delete('/medidas-delete/{id}', [MedidasController::class, 'deleteMedida']);

// Fibonacci
Route::get('/fibonacci-list', [FibonacciController::class, 'listNumeros']);
Route::post('/fibonacci-save', [FibonacciController::class, 'addNumeros']);
Route::delete('/fibonacci-delete/{id}', [FibonacciController::class, 'deleteNumero']);

// Matriz
Route::post('/matriz-list', [MatrizController::class, 'listXY']);
Route::post('/matriz-save', [MatrizController::class, 'addXY']);
Route::post('/matriz-delete/{id}', [MatrizController::class, 'deleteXY']);

