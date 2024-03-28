<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function naps()
    {
        return $this->belongsToMany(Nap::class);
    }

    public function plans()
    {
        return $this->belongsToMany(Plan::class);
    }

    public function nodos()
    {
        return $this->belongsToMany(Nodo::class);
    }

    // relacion foranea con interesado
    public function interesados()
    {
        return $this->belongsToMany(Interesado::class);
    }

    public function tareas()
    {
        return $this->hasMany(Tarea::class); // Una instalación tiene muchas tareas
    }

    public function down()
    {
        Schema::dropIfExists('instalacions');
    }
}
