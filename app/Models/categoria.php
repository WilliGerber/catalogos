<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'categoria',
        'image',
        'id_usuario_ultima_alteracao'
    ];
}
