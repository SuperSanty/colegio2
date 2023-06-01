<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profesor;

class Materias extends Model
{
    use HasFactory;

    public function materia_profesor(){
        return $this->belongsTo(Profesor::class);
    }
}
