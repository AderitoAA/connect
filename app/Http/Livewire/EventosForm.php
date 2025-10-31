<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Evento;

class EventosForm extends Component
{
    public $eventoSelecionado;

    protected $listeners = ['mostrarDetalhes'];

    public function mostrarDetalhes($id)
    {
        $this->eventoSelecionado = Evento::find($id);
        $this->dispatchBrowserEvent('show-event-modal');
    }

    public function render()
    {
        $eventos = Evento::latest()->get();
        return view('livewire.eventos-index', compact('eventos', 'eventoSelecionado'))
            ->extends('layout.inicio')
            ->section('content');
    }
}
