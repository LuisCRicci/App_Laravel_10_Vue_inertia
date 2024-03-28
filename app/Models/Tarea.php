<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function materiales()
    {
        return $this->belongsToMany(Material::class, 'material_tarea');
    }


    public function down()
    {
        Schema::dropIfExists('tareas');
    }
}
