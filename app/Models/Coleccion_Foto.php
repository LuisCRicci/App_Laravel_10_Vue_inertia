<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coleccion_Foto extends Model
{
    use HasFactory;
    protected $guarded = [];

    //relacion foranea con interesado
    public function interesados(){
        return $this->belongsToMany(Interesado::class);
    }

    public function down()
    {
        Schema::dropIfExists('colecction_fotos');
    }
}
