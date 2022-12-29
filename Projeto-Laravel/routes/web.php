<?php

use App\Http\Controllers\UserController;
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

//LINKAR UM CONTROLLER
Route::get('/principal/{user}', [UserController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
})->name('home');



/*
//USANDO REQUEST
Route::get('/request', function (Request $request) {
    //$r = $request->all();
    
    //Verifica se o Campo é Preenchido
    $r = $request->whenFilled('keyword', function($input) {
        dd('x', $input);
    });


    //dd($request);
    return 'x';
});

Route::get('/user/{user}', function (User $user) {
    dd($user);
    return $user;
})->name('user');

//GRUPO DE ROTAS
Route::prefix('usuarios')->group(function() {

Route::get('', function() {
    return 'usuário';
})->name('usuarios');

Route::get('/{id}', function() {
    return 'Mostrar Detalhes';
})->name('usuarios.show');

Route::get('/{id}/tags', function() {
    return 'Tags do Usuário';
})->name('usuarios.tags');

});

//ABRIR NOME DA PÁGINA SEM A /
Route::get('/empresa/{string?}', function ($string = null) {
    return $string;
    //return view('welcome');
})->name('empresa');
*/
