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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id();
            $table-> string('Descricao',300);
            $table-> integer('Elevacar');
            $table->unsignedBigInteger('Meacnicos_id');
            $table->unsignedBigInteger('Carros_id');
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
        Schema::dropIfExists('servicos');
    }
};
