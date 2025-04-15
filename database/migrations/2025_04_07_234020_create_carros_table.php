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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clientes_id');
            $table-> string('Placa',15);
            $table-> string('Marca',50);
            $table-> string('Modelo',100);
            $table-> integer('Ano');
            $table-> string('Motor',100);
            $table-> foreign('clientes_id')->references('id')->on('clientes') ->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
