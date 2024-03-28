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
        Schema::create('instalacions', function (Blueprint $table) {
            $table->id();
            $table->string('telefono_add',16);
            $table->string('tipo_instalacion',200);
            $table->string('cid', 16);
            $table->double('costo_adicional',8, 3);
            $table->double('descuento',8, 3);
            $table->string('observacion',200);
            $table->string('estado', 15);
            $table->date('fecha_pactada');
            $table->time('hora_pactada');
            $table->integer('distancia_nap');
            $table->foreignId('interesado_id')->constrained('interesados')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('plan_id')->constrained('plans')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('nap_id')->constrained('naps')->onUpdate('cascade')->onDelete('restrict');
            //llave foranea con Nodo
            $table->foreignId('nodo_id')->constrained('nodos')->onUpdate('cascade')->onDelete('restrict');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instalacions');
    }
};
