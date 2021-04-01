<?php

use App\Http\Controllers\biblioteca\BibliotecaController;
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
Route::get('/biblioteca-livro', [BibliotecaController::class, 'listLivro']);
Route::get('/biblioteca-usuario', [BibliotecaController::class, 'listUsuario']);
Route::post('/biblioteca-save-livro', [BibliotecaController::class, 'createLivro']);
Route::post('/biblioteca-save-usuario', [BibliotecaController::class, 'createUsuario']);
