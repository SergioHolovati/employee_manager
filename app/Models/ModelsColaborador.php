<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsColaborador extends Model
{
    use HasFactory;


    protected $fillable = [
        'filial',
        'matricula',
        'nome',
        'posicao',
        'email',
        'gestor',
        'updated_at',
        'created_at'
    ];
}
