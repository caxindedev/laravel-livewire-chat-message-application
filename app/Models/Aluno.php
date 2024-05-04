<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nome', 'data_nascimento', 'genero', 'telefone', 'email', 'whatsapp', 'empresa_id',
    ];

    /**
     * Get the empresa that owns the Aluno
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa(): BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the agenda that owns the User
     * use \Illuminate\Database\Eloquent\Relations\HasOne;
     * @return
     */
     public function agenda(): HasOne
    {
        return $this->hasOne(Agenda::class);
    }

}
