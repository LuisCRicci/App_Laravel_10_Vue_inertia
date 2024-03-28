<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    protected $guarded = [];
    // relacion foranea con modelo Instalacion
    public function tareas()
    {
        return $this->belongsToMany(Tarea::class, 'material_tarea');
    }


    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
