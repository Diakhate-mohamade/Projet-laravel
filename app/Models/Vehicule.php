<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'matricule',
        'modele',
        'description',
        'type_permis_requis',
        'annee',
        'couleur',
        'kilometrage',
        'disponibilite',
        'tarif',
        'type_carburant',
        'image',
        'date_achat',
        'date_mise_en_service',
    ];
}
