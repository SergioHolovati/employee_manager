<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsGestor extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricula','nome','email'
    ];
}
