<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('servicos_id');
            $table->unsignedBigInteger('mecanicos_id');
            $table->unsignedBigInteger('carros_id');
            $table->string('Dia_do_servico');
            $table->string('Tempo_para_aprontar');
            $table->foreign('servicos_id')->references('id')->on('servicos')->onDelete('cascade');
            $table-> foreign('mecanicos_id')->references('id')->on('mecanicos') ->onDelete('cascade');
            $table-> foreign('carros_id')->references('id')->on('carros') ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
