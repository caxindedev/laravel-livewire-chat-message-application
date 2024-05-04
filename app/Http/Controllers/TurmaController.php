<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Turma;

class TurmaController extends Controller
{

    public function index(){
        $turmas = Turma::all();
        return view('secretaria.turma.listar', compact(['turmas']));
    }


    public function create(){

        $cursos = Curso::all();
        return view('secretaria.turma.create', compact(['cursos']));
    }

    public function store(Request  $request){
        $turma = $request->only(['curso_id', 'nome', 'data_inicio', 'data_termino', 'fotografia']); // apenas campos permitidos para turma
        $resp = Turma::create($turma);
        return redirect()->back()->withInput(['message'=> $resp->nome.' A turma foi criada com sucesso']);
    }
}
