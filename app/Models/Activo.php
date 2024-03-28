<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;
    protected $guarded = [];

    //relacion con foranea con naps
    public function naps(){
        return $this->belongsToMany(Nap::class);
    }

    public function down()
    {
        Schema::dropIfExists('activos');
    }

    
}
