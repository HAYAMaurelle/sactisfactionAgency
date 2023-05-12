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
        Schema::create('appartement_caracteristique', function (Blueprint $table) {
            $table->id();
            $table->string('valeur');
            $table->foreignId('appartement_id');
            $table->foreignId('caracteristique_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartement_caracteristique');
    }
};
