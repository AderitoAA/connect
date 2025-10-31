<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'atualizado_em';

    protected $fillable = [
        'titulo',
        'slug',
        'resumo',
        'conteudo',
        'imagem_capa_url',
        'destaque',
        'publicado',
        'data_publicacao',
        'criado_por',
        'views'
    ];

    protected $casts = [
        'destaque' => 'boolean',
        'publicado' => 'boolean',
        'data_publicacao' => 'datetime',
    ];
}