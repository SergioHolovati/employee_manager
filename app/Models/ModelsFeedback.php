<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsFeedback extends Model
{
    use HasFactory;

    protected $fillable=[
        "gestor_id","colaborador_id","assunto","nota","comentario","data"
    ];
}
