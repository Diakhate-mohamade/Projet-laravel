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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Ajout de la clé étrangère vers la table des utilisateurs
            $table->string('numero_telephone'); // Ajout du numéro de téléphone
            $table->string('lieu_depart');
            $table->string('lieu_arrivee');
            $table->date('date');
            $table->time('heure_debut');
            $table->time('heure_fin');
            $table->integer('duree')->nullable();
            $table->decimal('montant', 10, 2)->nullable();
            $table->string('mode_paiement')->nullable();
            $table->string('numero_facture')->nullable();
            $table->unsignedBigInteger('chauffeur_id')->nullable();
            $table->unsignedBigInteger('vehicule_id')->nullable();
            $table->text('remarques')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); // Référence à la table des utilisateurs
            $table->foreign('chauffeur_id')->references('id')->on('chauffeurs');
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
