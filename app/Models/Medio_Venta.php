<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medio_Venta extends Model
{
    use HasFactory;

    protected $guarded = [];

    // hasmany con interesados
    public function interesados(){
        return $this->hasMany(Interesado::class);
    }

    public function down()
    {
        Schema::dropIfExists('medio_ventas');
    }
}
