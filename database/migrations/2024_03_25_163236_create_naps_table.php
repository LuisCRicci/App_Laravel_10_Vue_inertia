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
        Schema::create('naps', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',16);
            $table->decimal('latitud', 20, 17)->nulable();
            $table->decimal('longitud', 20, 17)->nulable();
            $table->string('tipo_nap', 7);
            $table->foreignId('zona_id')->constrained('zonas')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('naps');
    }
};
