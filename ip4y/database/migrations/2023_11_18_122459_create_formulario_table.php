<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("sobrenome");
            $table->string("nascimento");
            $table->string("email");
            $table->string("genero");
            $table->string("cpf");
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario');
    }
};
