<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vehicule;
use App\Models\User; // Ajout de la classe User
use App\Models\Chauffeur; // Ajout de la classe Chauffeur
use App\Models\Location; // Ajout de la classe Location

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vehicules = Vehicule::all(); // Récupère tous les véhicules
        $users = User::all(); // Récupère tous les utilisateurs
        $chauffeurs = Chauffeur::all(); // Récupère tous les chauffeurs
        return view('home', compact('vehicules', 'users', 'chauffeurs')); // Passer $chauffeurs à la vue
    }

    public function adminHome()
    {
        return view('dashboard');
    }

    public function reservation()
    {
        $vehicules = Vehicule::all(); // Récupère tous les véhicules
        $users = User::all(); // Récupère tous les utilisateurs
        $chauffeurs = Chauffeur::all(); // Récupère tous les chauffeurs
        $locations = Location::all(); // Récupère tous les chauffeurs
        return view('reservation', compact('vehicules', 'users', 'chauffeurs','locations')); // Passer $chauffeurs à la vue
    }
}
