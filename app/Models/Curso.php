<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;
use App\Models\Preceptor;

class Curso extends Model
{
    use HasFactory;

    public function curso_alumno(){
        return $this->hasMany(Alumno::class);
    }

    public function curso_preceptor(){
        return $this->belongsTo(Preceptor::class);
    }
}
