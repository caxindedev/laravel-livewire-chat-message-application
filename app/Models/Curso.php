<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome','fotografia', 'descricao'
    ];


         /**
     * Get all of the turmas for the Curso
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function turmas(): HasMany
    {
        return $this->hasMany(Turma::class);
    }
}
