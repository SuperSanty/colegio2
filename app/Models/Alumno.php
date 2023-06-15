<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Curso;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable=[
        'Nombre',
        'Apellido',
        'Edad',
        'mail',
        'curso_id'
    ];

    public function alumno_curso(){
        return $this->belongsTo(Curso::class);
    }
}
