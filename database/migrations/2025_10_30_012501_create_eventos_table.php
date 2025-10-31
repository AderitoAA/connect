<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
              $table->id('id'); // Campo 'id' como primário
            $table->string('titulo'); // Título do evento
            $table->text('descricao'); // Descrição do evento
            $table->date('data_inicio'); // Data de início
            $table->date('data_fim'); // Data de término
            $table->string('local'); // Local do evento
            $table->string('criado_por'); // Quem criou o evento
            $table->timestamp('criado_em')->useCurrent(); // Hora de criação, padrão para timestamp atual
            $table->string('imagem_url')->nullable(); // URL da imagem, opcional
            $table->float('lat', 10, 6)->nullable(); // Latitude
            $table->float('lng', 10, 6)->nullable(); // Longitude
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
