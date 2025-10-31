<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WidgetStats extends Component
{
    public $usersToday;
    public $noticiasHoje;
    public $ticketsHoje;

    public function mount()
    {
        $this->refresh();
    }

    public function refresh()
    {
        $today = Carbon::today();
        $this->usersToday = DB::table('usuarios')->whereDate('criado_em', $today)->count();
        $this->noticiasHoje = DB::table('noticias')->whereDate('data_publicacao', $today)->count();
        $this->ticketsHoje = DB::table('pedidos_servicedesk')->whereDate('criado_em', $today)->count();
    }

    public function render()
    {
        return view('livewire.widget-stats');
    }
}