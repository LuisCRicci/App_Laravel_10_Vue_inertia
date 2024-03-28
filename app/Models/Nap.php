<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nap extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function zonas()
    {
        return $this->belongsToMany(Zona::class);
    }

    public function instalacions()
    {
        return $this->hasMany(Instalacion::class);
    }

    public function activos()
    {
        return $this->hasMany(Activo::class);
    }

    public function down()
    {
        Schema::dropIfExists('naps');
    }
}
