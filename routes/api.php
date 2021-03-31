<?php

use App\Http\Controllers\problemaDois\ProblemaDoisController;
use App\Http\Controllers\problemaUm\ProblemaUmController;
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
Route::apiResource('/problema-1', ProblemaUmController::class);
Route::apiResource('/problema-2', ProblemaDoisController::class);
