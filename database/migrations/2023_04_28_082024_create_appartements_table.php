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
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->longText('description');
            $table->integer('prix');
            $table->binary('image');
            $table->foreignId('caracteristique_id')->constrained('caracteristiques');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('typesappartement_id')->constrained('typesappartement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartements');
    }
};
