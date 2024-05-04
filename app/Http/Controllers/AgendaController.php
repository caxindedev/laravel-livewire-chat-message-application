<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = [];
        $agendas = Agenda::with(['aluno',])->get();

        foreach ($agendas as $agenda) {
            $eventos[] = [
                'title' => $agenda->title,
                'start' => $agenda->start,
                'foto' => $agenda->aluno->user->fotografia,
                'nome' => $agenda->aluno->user->name,
                'regra' => Auth::user()->role[0]->name,
                'descricao' => $agenda->descricao,
                'display' => 'background',
                'color' => $agenda->color,
                'backgroundColor' => $agenda->color,
                'borderColor' => $agenda->color,
                'display' => 'background',
            ];
        }
        #dd($eventos);
        return view('agenda.agendamento', ['agenda' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alunos = User::all();
        return view('secretaria.agendamento.individual', ['alunos' => $alunos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agendamento = $request->only(['title', 'color',  'start', 'descricao', 'aluno_id', 'turma_id']); // apenas campos permitidos para os alunos

        $resp = Agenda::create($agendamento);
        return redirect()->back()->withInput(['message'=> $resp->nome.' foi '. ($resp->genero == 'Masculino')? ' Inserido':' Inserida ' . ' com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        //
    }
}
