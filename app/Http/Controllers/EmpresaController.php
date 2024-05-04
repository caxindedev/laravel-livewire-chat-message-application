<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function index(){
        $empresas = Empresa::paginate();
        return view('secretaria.empresa.listar', compact(['empresas']));
    }

    public function create(){
        return view('secretaria.empresa.create');
    }

    public function edit(Empresa $empresa){
        return view('secretaria.empresa.edit', ['empresa' => $empresa]);
    }

    public function store(Request $request){
        $dados = $request->only(['nome', 'nif', 'telefone', 'email', 'endereco', "email"]);
        $resp = Empresa::create($dados);
        return redirect()->back()->withInput(['message'=> 'a empresa '.$resp->nome.' foi Inserida  com sucesso']);
    }

    public function update(Request $request, Empresa $empresa){
        $dados = $request->only(['nome', 'nif', 'telefone', 'email', 'endereco', "email"]);
        $empresa = Empresa::findOrFail($empresa);
        $emprea->update($dados);
        return redirect()->back()->withInput(['message'=> 'a empresa '.$empresa->nome.' foi actualizada com sucesso']);
    }

    public function cadastrarEmpresa(Request $request){
        $empresa = new Empresa();
        $empresa->store($request);
        return redirect()->back();
    }

    public function show(Empresa $empresa){
        return view('secretaria.empresa.show', ['empresa' => $empresa]);
        # nesta funcao faca um page que mostra a empresa num card e liste todos os alunos da empresa.
        # chame deste geito $empresa->aluno, note he uma lista entao coloque num loop
    }

    public function destroy(Empresa $empresa){
        $empresa = Empresa::findOrfail($empresa->id);
        $empresa->delete();
        return redirect()->back()->withInput(['success' => 'empresa apagada!']);
    }
}
