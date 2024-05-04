<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    public function get(){
        return view('aluno.plano.meuPlano');
    }
}
