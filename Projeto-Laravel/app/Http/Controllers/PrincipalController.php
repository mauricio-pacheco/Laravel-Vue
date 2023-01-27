<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{

    public function show(User $user)
    {
     return view('/layout/html/neon/index', [
      
      //Valores das STRINGS principais
       'titulo_pagina' => 'Supermercados - Casa da Web ',
       'descricao_pagina' => 'Supermercados - Casa da Web ',
       'nome' => 'Maurício Pacheco'
       
       //'user' => $user
     ]);
 
    
    }

}
