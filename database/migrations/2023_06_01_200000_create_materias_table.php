<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Materia');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('materias');
    }
};
