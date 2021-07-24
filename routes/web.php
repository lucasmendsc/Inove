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
    Route::get('/adicionar', [ClienteController::class, 'create']);
    Route::get('/mostrar', [ClienteController::class, 'show']);
    Route::get('/editar', [ClienteController::class, 'edit']);
    Route::get('/deletar', [ClienteController::class, 'destroy']);
    Route::get('/index', [ClienteController::class, 'index']);
});

Route::group(['prefix' => '/empresa'], function () {
    Route::get('/adicionar', [EmpresaController::class, 'create']);
    Route::get('/mostrar', [EmpresaController::class, 'show']);
    Route::get('/editar', [EmpresaController::class, 'edit']);
    Route::get('/deletar', [EmpresaController::class, 'destroy']);
});

Route::group(['prefix' => '/produto'], function () {
    Route::get('/adicionar', [ProdutoController::class, 'create']);
    Route::get('/mostrar', [ProdutoController::class, 'show']);
    Route::get('/editar', [ProdutoController::class, 'edit']);
    Route::get('/deletar', [ProdutoController::class, 'destroy']);
});

Route::group(['prefix' => '/transacao'], function () {
    Route::get('/adicionar', [TransacaoController::class, 'create']);
    Route::get('/mostrar', [TransacaoController::class, 'show']);
    Route::get('/editar', [TransacaoController::class, 'edit']);
    Route::get('/deletar', [TransacaoController::class, 'destroy']);
});
