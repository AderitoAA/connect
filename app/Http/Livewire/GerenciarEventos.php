<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Evento;

class GerenciarEventos extends Component
{
    public $titulo, $descricao, $data_inicio, $data_fim, $local, $imagem_url, $lat, $lng;
    public $eventoId;

    protected $rules = [
        'titulo' => 'required|min:3',
        'descricao' => 'required',
        'data_inicio' => 'required|date',
        'data_fim' => 'required|date',
        'local' => 'required',
    ];

    public function salvar()
    {
        $this->validate();

        Evento::updateOrCreate(
            ['id' => $this->eventoId],
            [
                'titulo' => $this->titulo,
                'descricao' => $this->descricao,
                'data_inicio' => $this->data_inicio,
                'data_fim' => $this->data_fim,
                'local' => $this->local,
                'imagem_url' => $this->imagem_url,
                'lat' => $this->lat,
                'lng' => $this->lng,
                'criado_por' => auth()->id() ?? 1,
            ]
        );

        $this->reset();
        session()->flash('success', 'Evento salvo com sucesso!');
    }

    public function editar($id)
    {
        $evento = Evento::findOrFail($id);
        $this->fill($evento->toArray());
        $this->eventoId = $evento->id;
    }

    public function apagar($id)
    {
        Evento::findOrFail($id)->delete();
        session()->flash('success', 'Evento removido com sucesso!');
    }

    public function render()
    {
        $eventos = Evento::latest()->get();
        return view('livewire.gerenciar-eventos', compact('eventos'))
            ->extends('layout.dashboard')
            ->section('content');
    }
}
