<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'nif', 'telefone', 'email', 'endereco', "email"
    ];

 /**
     * Get all of the alunos for the Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alunos(): HasMany
    {
        return $this->hasMany(Aluno::class);
    } 
    
    
     /**
     * Get all of the alunos for the Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function turmas(): HasMany
    {
        return $this->hasMany(Turma::class);
    }

    

    public function store($dados){
        
        $empresa['nome'] = $dados->nome;
        $empresa['nif'] = $dados->nif;
        $empresa['email'] = $dados->email;
        $empresa['telefone'] = $dados->telefone;
        $empresa['endereco'] = $dados->endereco;

        $this->create($empresa);
    }
}
