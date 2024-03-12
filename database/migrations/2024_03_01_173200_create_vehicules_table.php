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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->string('matricule')->unique();
            $table->string('modele');
            $table->text('description')->nullable();
            $table->string('type_permis_requis');
            $table->year('annee');
            $table->string('couleur');
            $table->integer('kilometrage')->unsigned();
            $table->boolean('disponibilite')->default(true);
            $table->decimal('tarif', 10, 2); // Utilisation du Franc CFA avec deux chiffres après la virgule
            $table->string('type_carburant');
            $table->string('image')->nullable();
            $table->date('date_achat');
            $table->date('date_mise_en_service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicules');
    }
};
