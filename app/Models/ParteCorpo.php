<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParteCorpo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'tamanho', 'fotografia', 'medida_id'
    ];
}
