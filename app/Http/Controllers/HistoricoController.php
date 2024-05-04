<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function create(){
        return view('aluno.historico.create');
    }
}
