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
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->integer('experience')->unsigned();
            $table->string('numero_permis')->unique();
            $table->date('date_emission');
            $table->date('date_expiration');
            $table->string('categorie');
            $table->decimal('evaluation', 5, 2)->nullable();
            $table->text('contrat')->nullable();
            $table->string('statut')->default('actif');
            $table->string('photo')->nullable(); // Ajout de la colonne pour la photo du chauffeur
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chauffeurs');
    }
};
