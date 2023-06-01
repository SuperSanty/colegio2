<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Preceptor extends Model
{
    use HasFactory;

    public function preceptor_curso(){
        return $this->hasMany(Curso::class);
    }
}

