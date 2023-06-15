<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Curso;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('preceptors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Edad', 2);
            $table->string('mail');
            $table->foreignIdFor(Curso::class)->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preceptors');
    }
};
