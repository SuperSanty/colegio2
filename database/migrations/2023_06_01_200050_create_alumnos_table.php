<?php

use App\Models\Curso;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Edad', 2);
            $table->string('mail');
            $table->foreignIdFor(Curso::class)->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
