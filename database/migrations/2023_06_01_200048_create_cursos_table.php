<?php

use App\Models\Materias;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Curso');
            $table->string('Division');
            $table->foreignIdFor(Materias::class)->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
