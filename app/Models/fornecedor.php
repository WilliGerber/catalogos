<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    use HasFactory;
    protected $table = 'fornecedores';
    protected $fillable = [
        'nome',
        'id_categoria',
        'id_usuario_ultima_alteracao'
    ];
}
