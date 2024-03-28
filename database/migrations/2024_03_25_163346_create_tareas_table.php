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
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('cid',16)->unique();
            $table->enum('estado', ['pendiente', 'en proceso', 'terminada']);
            $table->string('nombre');
            $table->string('prioridad');
            $table->date('fecha_acordada');
            $table->time('hora_acordada');
            $table->date('fecha_inicio')->nullable();
            $table->time('hora_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->time('hora_fin')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('respuesta')->nullable();
            $table->unsignedBigInteger('instalacion_id')->nullable(); // La clave foránea opcional
            $table->foreign('instalacion_id')->references('id')->on('instalacions')->onDelete('set null'); // Relación con la tabla instalacion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tareas');
    }
};
