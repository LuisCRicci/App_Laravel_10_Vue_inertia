<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    use HasFactory;

    protected $guarded = [];  

    public function zonas()
    {
        return $this->hasMany(Nap::class);
    }

    public function down()
    {
        Schema::dropIfExists('zonas');
    }
}
