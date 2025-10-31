<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Noticia;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NoticiaForm extends Component
{
    use WithFileUploads;

    public $titulo;
    public $resumo;
    public $conteudo;
    public $publicado = 0;
    public $destaque = 0;
    public $data_publicacao;
    public $imagem; // arquivo enviado

    protected $rules = [
        'titulo' => 'required|max:250',
        'resumo' => 'nullable|max:500',
        'conteudo' => 'nullable',
        'publicado' => 'nullable|in:0,1',
        'destaque' => 'nullable|in:0,1',
        'data_publicacao' => 'nullable|date',
        'imagem' => 'nullable|image|max:5120' // 5MB
    ];

    public function submit()
    {
        $this->validate();

        $now = Carbon::now();
        // Se foi marcado publicar agora, garante data_publicacao = now
        $dataPub = null;
        if ($this->data_publicacao) {
            $dataPub = Carbon::parse($this->data_publicacao);
        } elseif (!empty($this->publicado)) {
            $dataPub = $now;
        }

        $imagemPath = null;
        if ($this->imagem) {
            // guarda no disco 'public' em storage/app/public/noticias
            $imagemPath = $this->imagem->store('noticias', 'public');
        }

        // Normaliza flags (garante 0/1 inteiros)
        $isPublicado = (int) $this->publicado;
        $isDestaque = (int) $this->destaque;

        $noticia = Noticia::create([
            'titulo' => $this->titulo,
            'slug' => Str::slug($this->titulo) . '-' . time(),
            'resumo' => $this->resumo,
            'conteudo' => $this->conteudo,
            'publicado' => $isPublicado,
            'destaque' => $isDestaque,
            'data_publicacao' => $dataPub,
            'criado_por' => auth()->id() ?? null,
            'imagem_capa_url' => $imagemPath, // path relativo no disco 'public'
            'views' => 0,
        ]);

        session()->flash('success', 'Notícia criada com sucesso.');
        // redireciona para a home (assegura que tens route('home') definida)
        return redirect()->route('dasboard');
    }

    public function render()
    {
        return view('livewire.noticia-form');
    }
}