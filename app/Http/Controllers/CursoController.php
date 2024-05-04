<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::paginate();
        return view('secretaria.curso.listar', compact(['cursos']));
    }

    public function create(){

        return view('secretaria.curso.create');
    }

    public function store(Request $request){
        $dados = $request->only(['nome', 'fotografia', 'descricao']);
        $resp = Curso::create($dados);
        return redirect()->back()->withInput(['message'=> 'O curso '.$resp->nome.' foi Inserido  com sucesso']);
    }

    public function show(Curso $curso){
        return view('secretaria.curso.show', ['curso' => $curso]);
        # nesta funcao faca um page que mostra a empresa num card e liste todos os alunos da empresa.
        # chame deste geito $empresa->aluno, note he uma lista entao coloque num loop
    }
}
