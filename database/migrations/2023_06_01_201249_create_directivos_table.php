<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('directivos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Edad', 2);
            $table->string('mail');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('directivos');
    }
};
