<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nodo extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function instalacions()
    {
        return $this->hasMany(Instalacion::class);
    }

    public function down()
    {
        Schema::dropIfExists('nodos');
    }
}
