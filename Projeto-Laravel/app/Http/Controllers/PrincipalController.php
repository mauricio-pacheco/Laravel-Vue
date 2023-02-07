<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{

    public function show()
    {
     return view('index', [
       //'user' => $user
     ]);
    }

}
