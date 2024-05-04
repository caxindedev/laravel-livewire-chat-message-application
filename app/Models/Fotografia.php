<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    use HasFactory;

    protected $fillable = [
        'data', 'aluno_id', 'frontal', 'lateral', 'lateral2'
    ];


     /**
     * Get all of the medidas for the Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fotografias(): HasMany
    {
        return $this->hasMany(Fotografia::class);
    }
}
