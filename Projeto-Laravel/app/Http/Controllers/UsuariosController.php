<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsuariosController extends Controller
{
    public function visualizar()
    {
    
     //LEVAR DADOS PARA A VIEW
     $listar_usuarios = Usuarios::all();
     return view('usuarios', compact('listar_usuarios'));

    }

    public function cadastrar(Request $request) 
    {
        //COLETAR DADOS DO POST (Com Validação)
        $input = $request->validate([
            'usuario' => 'string',
            'senha' => 'string',
            'nome' => 'string'
           ]);

       $usuarios = Usuarios::create($input);
       return Redirect::route('usuarios.visualizar');
    }

    public function atualizar(Request $request) 
    {
       $id = $request->get("id");
       $input = Usuarios::where('id', $id)->update([
        'usuario' => $request->get("usuario"),
        'senha' => $request->get("senha"),
        'nome' => $request->get("nome"),
       ]);
       return Redirect::route('usuarios.visualizar');
    }

    public function excluir(Request $request) 
    {
       $id = $request->get("id");
       Usuarios::where('id', $id)->delete();
       return Redirect::route('usuarios.visualizar');
    }

}
