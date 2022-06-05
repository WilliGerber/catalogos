<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogo extends Model
{
    use HasFactory;
    protected $table = 'catalogos';
    protected $fillable = [
        'nome',
        'descricao',
        'id_fornecedor',
        'id_categoria',
        'catalogo',
        'image',
        'id_usuario_ultima_alteracao'
    ];
}
