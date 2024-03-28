<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interesado extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function personas()
    {
        return $this->belongsToMany(Persona::class);
    }

    public function medio_ventas()
    {
        return $this->belongsToMany(Medio_Venta::class);
    }
    
    public function instalacions()
    {
        return $this->HasMany(Instalacion::class);
    }

    public function down()
    {
        Schema::dropIfExists('interesados');
    }
}
