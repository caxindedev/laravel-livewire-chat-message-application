<?php

namespace App\Http\Controllers;

use App\Models\Fotografia;
use Illuminate\Http\Request;

class FotografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.medidas.fotografia.novaFotografia');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fotografia = $request->only(['aluno_id', 'data', 'frontal', 'lateral', 'lateral2']); // apenas campos permitidos para os alunos
        
        if($request->frontal){
            $fotografia['frontal'] = $request->frontal->store('fotografias');
        } 

        if($request->lateral){
            $fotografia['lateral'] = $request->lateral->store('fotografias');
        } 

        if($request->lateral2){
            $fotografia['lateral2'] = $request->lateral2->store('fotografias');
        } 

        $resp = Fotografia::create($fotografia);
        
        return redirect()->back()->withInput(['message'=> $resp->nome.' foi '. ($resp->genero == 'Masculino')? ' Inserido':' Inserida ' . ' com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function show(Fotografia $fotografia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Fotografia $fotografia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fotografia $fotografia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fotografia $fotografia)
    {
        //
    }
}
