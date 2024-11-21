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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string("nombre")->unique();
            $table->string("email")->unique(); // Hace que el email sea único
            $table->date("fecha_fundacion");
            $table->boolean("activo")->default(true);
            $table->integer("victorias");
            $table->foreignId("juego_id")->constrained("juegos");
            $table->timestamps(); // Crea los campos de creación y actualización del registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
