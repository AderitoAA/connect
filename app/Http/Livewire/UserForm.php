<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UserForm extends Component
{
    public $login;
    public $nome;
    public $email;
    public $senha; // plain password input
    public $agencia_id;
    public $cargo;
    public $departamento;
    public $tipo = 'colaborador';
    public $ativo = 1;

    protected $rules = [
        'login' => 'required|unique:usuarios,login|max:100',
        'nome' => 'required|max:150',
        'email' => 'required|email|unique:usuarios,email|max:150',
        'senha' => 'required|min:6',
        'tipo' => 'required|in:colaborador,externo,admin'
    ];

    public function submit()
    {
        $this->validate();

        $usuario = Usuario::create([
            'login' => $this->login,
            'nome' => $this->nome,
            'email' => $this->email,
            'senha_hash' => bcrypt($this->senha),
            'agencia_id' => $this->agencia_id ?: null,
            'cargo' => $this->cargo,
            'departamento' => $this->departamento,
            'tipo' => $this->tipo,
            'ativo' => $this->ativo,
        ]);

        session()->flash('success', 'Usuário criado com sucesso.');
        return redirect()->route('dashboard'); // ou permanece na página conforme preferires
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}