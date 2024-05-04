<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\User;
use App\Models\RoleUser;
use App\Models\Role;
use Illuminate\Support\Facades\DB;



class AlunoController extends Controller
{

    public function dashboard(){

        return view('aluno.dadosPessoais');
    }

    public function instrucoes(){

        return view('aluno.instrucoes');

    }




    public function index(){

        $alunos = Aluno::paginate();

        return view('secretaria.aluno.listar', compact(['alunos']));
    }

    public function pesquisar(Request $request){
        

        $alunos = Aluno::query()
        ->with('user') // Carrega o relacionamento aluno->user
        ->where(function ($query) use ($request) {
            // Condição para o campo 'telefone' se não estiver vazio
            if ($request->telefone) {
                $query->where('telefone', 'like', '%' . $request->telefone . '%');
            }
        })
        ->where(function ($query) use ($request) {
            // Condições para 'nome' e 'email' se não estiverem vazios
            if ($request->nome) {
                $query->whereHas('user', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->nome . '%');
                });
            }
            if ($request->email) {
                $query->orWhereHas('user', function ($query) use ($request) {
                    $query->where('email', 'like', '%' . $request->email . '%');
                });
            }
        })
        ->get();
   
        return view('secretaria.aluno.listar', compact(['alunos']));
    }

    public function show(Aluno $aluno){
        return view('aluno.index', ['aluno' => $aluno]);
        # nesta funcao faca um page que mostra a empresa num card e liste todos os alunos da empresa.
        # chame deste geito $empresa->aluno, note he uma lista entao coloque num loop
    }

    public function create(){

        return view('secretaria.aluno.create');
    }

    public function store(Request  $request){
        $aluno = $request->only(['nome', 'genero', 'email', 'telefone', 'whatsapp', 'empresa_id']); // apenas campos permitidos para os alunos
        $user = User::create([
            'name' => $aluno['nome'],
            'email' => $aluno['email'],
            'password' => bcrypt('password'),
        ]);
        $request['user_id'] = $user->id;
        $aluno = Aluno::create($request->only([ 'user_id','genero', 'telefone', 'whatsapp', 'empresa_id']));
        $role = Role::where('name', 'aluno')->first();
        $rolUserData = [
            'role_id' => $role->id,
            'user_id'=> $user->id,
        ];
        RoleUser::create($rolUserData);
        return redirect()->back();
    }


    public function update(Request $request, Aluno $aluno){
       
        $entity = new Aluno();
        $user = new User();

        $entity = Aluno::find($aluno->id);
        $user = User::where('id', $aluno->user_id)->first();
        $entity->data_nascimento = $request->data_nascimento;
        $entity->genero = $request->genero;
        $entity->telefone = $request->telefone;
        $entity->whatsapp = $request->whatsapp;
        
        $user->name  = $request->nome;
        $user->email = $request->email;
    
        $user->update();
        $entity->update();

        return redirect()->route('aluno.index');
    }

    public function edit(Aluno $aluno){
        
        return view('secretaria.aluno.editar', compact('aluno'));
    }


    public function editAluno($id){
        $aluno = Aluno::find($id);
        return view('aluno.edit', compact('aluno'));
    }


    public function updateAluno(Request $request, $id){
        $aluno = new Aluno();
        $aluno->atualizar($request, $id);
        return redirect()->back()->withInput(['success' => 'dados actualizado!']);
    }

    public function destroy(Aluno $aluno){
        $aluno = Aluno::findOrfail($aluno->id);
        $aluno->delete();
        return redirect()->back()->withInput(['success' => 'aluno apagados!']);
    }
}
