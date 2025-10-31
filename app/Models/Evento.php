<?php

// app/Models/Evento.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Evento.php

// ...
class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'data_inicio', // Novo campo
        'data_fim',    // Novo campo
        'local',
        'imagem_url',  // (Se usar)
        'lat',         // (Se usar)
        'lng',         // (Se usar)
        'criado_por',  // Novo campo (ex: ID do usuário logado)
        // 'criado_em' é automático via timestamps
    ];
}