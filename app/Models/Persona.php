<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function interesados()
    {
        return $this->hasMany(Interesado::class);
    }

    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
