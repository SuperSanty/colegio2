<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materias;

class Profesor extends Model
{
    use HasFactory;
    public function profesor_materia(){
        return $this->hasMany(Materias::class);
    }
}
