<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agenda extends Model
{
    use HasFactory;
    protected $table = "agendas";
    protected $fillable = ['aluno_id', 'title', 'start', 'color', 'turma_id', 'descricao'];

        /**
         * Get the Aluno associated with the Agenda
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function aluno(): BelongsTo
        {
            return $this->belongsTo(Aluno::class);
        }
}
