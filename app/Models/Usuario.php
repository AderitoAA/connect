<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';

    // Se a tua tabela usa "criado_em" e "atualizado_em"
    const CREATED_AT = 'criado_em';
    const UPDATED_AT = 'atualizado_em';

    protected $fillable = [
        'login',
        'nome',
        'email',
        'agencia_id',
        'cargo',
        'departamento',
        'foto_url',
        'data_admissao',
        'data_nascimento',
        'ativo',
        'tipo'
    ];

    // A coluna que guarda a password chama-se 'senha_hash'
    public function getAuthPassword()
    {
        return $this->senha_hash;
    }

    protected $hidden = [
        'senha_hash',
    ];
}