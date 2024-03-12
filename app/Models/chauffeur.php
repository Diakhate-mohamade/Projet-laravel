<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chauffeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'numero_chauffeur',
        'experience',
        'numero_permis',
        'date_emission',
        'date_expiration',
        'categorie',
        'evaluation',
        'contrat',
        'statut',
        'photo',
    ];

    public function diffForHumans()
      {
          return Carbon::parse($this->created_at)->diffForHumans();
      }
}
