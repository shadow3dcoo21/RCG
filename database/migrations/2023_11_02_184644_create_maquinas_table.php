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
        Schema::create('maquinas', function (Blueprint $table) {
            $table->id();
            $table->string('maquina', 200);
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_marca');
            $table->string('ruta_imagen', 255)->nullable();
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->foreign('id_marca')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maquinas');
    }
};
