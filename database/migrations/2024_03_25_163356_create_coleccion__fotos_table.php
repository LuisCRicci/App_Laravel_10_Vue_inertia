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
        Schema::create('coleccion__fotos', function (Blueprint $table) {
            $table->id();
            $table->string('asignar_cid', 255)->nulable();
            $table->string('uri_foto_doc_frente', 255)->nulable();
            $table->string('uri_foto_doc_espalda', 255)->nulable();
            $table->string('uri_foto_recibo', 255)->nulable();
            $table->string('uri_foto_fachada', 255)->nulable();
            $table->string('uri_foto_router', 255)->nulable();
            $table->string('uri_foto_testing', 255)->nulable();
            // llave foranea con tabla interesados
            $table->foreignId('interesado_id')->constrained('interesados')
            ->onUpdate('cascade')->onDelete('restrict')->nulable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coleccion__fotos');
    }
};
