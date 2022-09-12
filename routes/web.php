<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\controllers\ElectionController;

Route::get('/', [ElectionController::class, 'home']);
Route::get('/candidatos', [ElectionController::class, 'getCandidatos']);
Route::post('/cadastro', [ElectionController::class, 'addCandidato']);
Route::get('/cadastro', [ElectionController::class, 'cadastro']);
Route::get('/eleicoes/{id}', [ElectionController::class, 'showEleicoes']);

Route::post('/cadastro/eleicoes', [ElectionController::class, 'store']);
Route::get('/cadastro/eleicoes', [ElectionController::class, 'eleicoes']);
