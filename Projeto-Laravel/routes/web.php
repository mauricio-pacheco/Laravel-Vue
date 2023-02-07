<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\UsuariosController;
use App\Models\User;
use Illuminate\Http\Request;
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

//ROTA PARA A PÁGINA PRINCIPAL
Route::get('/principal', [PrincipalController::class, 'show']);

//ROTAS PARA O CRUD (Usuários)

//ROTA USUÁRIOS (GET)
Route::get('usuarios', [UsuariosController::class, 'visualizar'])->name('usuarios.visualizar');

//ROTA USUÁRIOS (POST) - Cadastrar Usuários
Route::post('usuarios_cadastrar', [UsuariosController::class, 'cadastrar'])->name('usuarios.cadastrar');

//ROTA USUÁRIOS (POST) - Atualizar Usuário
Route::post('usuarios_atualizar', [UsuariosController::class, 'atualizar'])->name('usuarios.atualizar');

//ROTA USUÁRIOS (POST) - Excluir Usuário
Route::post('usuarios_excluir', [UsuariosController::class, 'excluir'])->name('usuarios.excluir');

//ROTA PRINCIPAL
Route::get('/', function () {
    return view('welcome');
})->name('home');

