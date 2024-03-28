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
        Schema::create('interesados', function (Blueprint $table) {
            $table->id();
            $table->string('departamento', 100);
            $table->string('provincia', 100);
            $table->string('distrito', 100);
            $table->string('ccpp_urb', 200);
            $table->string('direccion', 200);
            $table->string('referencia', 150);
            $table->string('telefono', 15);
            $table->string('email', 100);
            $table->string('detalle_plan', 100);
            $table->decimal('latitud', 20, 17);
            $table->decimal('longitud', 20, 17);
            $table->enum('estado', ['pendiente', 'en proceso', 'terminada']);
            $table->foreignId('medio_venta_id')->constrained('medio__ventas')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('persona_id')->constrained('personas')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interesados');
    }
};
