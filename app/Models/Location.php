<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'numero_telephone',
        'lieu_depart',
        'lieu_arrivee',
        'date',
        'heure_debut',
        'heure_fin',
        'duree',
        'montant',
        'mode_paiement',
        'numero_facture',
        'chauffeur_id',
        'vehicule_id',
        'remarques'
    ];

    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function diffForHumans()
      {
          return Carbon::parse($this->created_at)->diffForHumans();
      }
}
