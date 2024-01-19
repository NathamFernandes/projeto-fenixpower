<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/equipe', [HomeController::class, 'equipe']);

Route::get('/equipe', [EquipeController::class, 'index']);

Route::get('/alunos', [AlunosController::class, 'index']);
Route::get('/alunos/cadastrar', [AlunosController::class, 'create']);
Route::post('/alunos', [AlunosController::class, 'store']);
Route::post('/alunos/deletar/{id}', [AlunosController::class, 'destroy']);