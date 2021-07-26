<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TransacaoController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::group(['prefix' => '/cliente'], function () {
    Route::get('/', [ClienteController::class, 'index']);
    Route::get('/cadastrar', [ClienteController::class, 'cadastrar']);
    Route::post('/adicionar', [ClienteController::class, 'create']);
    Route::get('/mostrar', [ClienteController::class, 'show']);
    Route::get('/editar{id}', [ClienteController::class, 'editar']);
    Route::post('/edit', [ClienteController::class, 'edit']);
    Route::get('/deletar{id}', [ClienteController::class, 'destroy']);
    Route::post('/logar', [ClienteController::class, 'logar']);
    Route::post('/deslogar', [ClienteController::class, 'deslogar']);
});

Route::group(['prefix' => '/empresa'], function () {
    Route::get('/', [EmpresaController::class, 'index']);
    Route::get('/cadastrar', [EmpresaController::class, 'cadastrar']);
    Route::post('/adicionar', [EmpresaController::class, 'create']);
    Route::get('/mostrar', [EmpresaController::class, 'show']);
    Route::get('/editar{id}', [EmpresaController::class, 'editar']);
    Route::post('/edit', [EmpresaController::class, 'edit']);
    Route::get('/deletar{id}', [EmpresaController::class, 'destroy']);
    Route::post('/verificarCnpj', [EmpresaController::class, 'verificarCnpj']);
    Route::post('/verificarEmail', [EmpresaController::class, 'verificarEmail']);
});

Route::group(['prefix' => '/produto'], function () {
    Route::get('/', [ProdutoController::class, 'index']);
    Route::get('/cadastrar', [ProdutoController::class, 'cadastrar']);
    Route::post('/adicionar', [ProdutoController::class, 'create']);
    Route::get('/mostrar', [ProdutoController::class, 'show']);
    Route::get('/editar{id}', [ProdutoController::class, 'editar']);
    Route::post('/edit', [ProdutoController::class, 'edit']);
    Route::get('/deletar{id}', [ProdutoController::class, 'destroy']);
});

Route::group(['prefix' => '/transacao'], function () {
    Route::get('/adicionar', [TransacaoController::class, 'create']);
    Route::get('/mostrar', [TransacaoController::class, 'show']);
    Route::get('/editar', [TransacaoController::class, 'edit']);
    Route::get('/deletar', [TransacaoController::class, 'destroy']);
});
