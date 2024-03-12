<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Validation\Rule;

use App\Models\User;
use App\Models\Location;
use App\Models\Chauffeur;
use App\Models\Vehicule;

class VehiculeContoller extends Controller
{


    /**
     * Affiche une liste des ressources.
     */
    public function index()
    {
        $vehicule = Vehicule::orderBy('created_at', 'DESC')->paginate(10);
        $users = User::all(); // Récupère tous les utilisateurs
        $locations = Location::all(); // Récupère toutes les locations
        $chauffeurs = Chauffeur::all();

        return view('vehicules.index', compact('vehicule', 'users', 'locations', 'chauffeurs'));
    }

    /**
     * Affiche le formulaire de création d'une nouvelle ressource.
     */
    public function create()
    {
        return view('vehicules.create');
    }

    /**
     * Stocke une nouvelle ressource nouvellement créée.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'marque' => 'required',
    //         'matricule' => 'required|unique:vehicules',
    //         'modele' => 'required',
    //         'description' => 'nullable',
    //         'type_permis_requis' => 'required',
    //         'annee' => 'required|integer',
    //         'couleur' => 'required',
    //         'kilometrage' => 'required|numeric',
    //         'disponibilite' => 'required',
    //         'tarif' => 'required|numeric',
    //         'type_carburant' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation pour l'image
    //         'date_achat' => 'required|date',
    //         'date_mise_en_service' => 'required|date',
    //     ]);

    //     try {
    //         // Upload de l'image
    //         $imageName = time().'.'.$request->image->extension();
    //         $request->image->move(public_path('images'), $imageName);

    //         // Création du véhicule avec le chemin de l'image
    //         Vehicule::create(array_merge($request->all(), ['image' => $imageName]));

    //         return redirect()->route('admin/vehicules')->with('success', 'Véhicule ajouté avec succès');
    //     } catch (\Exception $e) {
    //         return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de l\'ajout du véhicule. Veuillez réessayer.']);
    //     }
    // }
    public function store(Request $request)
{
    $request->validate([
        'marque' => 'required',
        'matricule' => 'required|unique:vehicules',
        'modele' => 'required',
        'description' => 'nullable',
        'type_permis_requis' => 'required|in:A,B,C,D', // Ajout de la règle de validation personnalisée
        'annee' => 'required|integer',
        'couleur' => 'required',
        'kilometrage' => 'required|numeric',
        'disponibilite' => 'required',
        'tarif' => 'required|numeric',
        'type_carburant' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation pour l'image
        'date_achat' => 'required|date',
        'date_mise_en_service' => 'required|date',
    ]);

    try {
        // Upload de l'image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Création du véhicule avec le chemin de l'image
        Vehicule::create(array_merge($request->all(), ['image' => $imageName]));

        return redirect()->route('admin.vehicules.index')->with('success', 'Véhicule ajouté avec succès');
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->withErrors(['error' => 'Une erreur est survenue lors de l\'ajout du véhicule. Veuillez réessayer.']);
    }
}


    /**
     * Affiche la ressource spécifiée.
     */
    public function show(string $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('vehicules.show', compact('vehicule'));
    }

    /**
     * Affiche le formulaire pour modifier la ressource spécifiée.
     */
    public function edit(string $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        return view('vehicules.edit', compact('vehicule'));
    }

    /**
     * Met à jour la ressource spécifiée dans le stockage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $vehicule = Vehicule::findOrFail($id);
    //     $vehicule->update($request->all());

    //     return redirect()->route('admin/vehicules')->with('success', 'Véhicule mis à jour avec succès');
    // }
    public function update(Request $request, string $id)
{
    $request->validate([
        'marque' => 'required',
        'modele' => 'required',
        'description' => 'nullable',
        'type_permis_requis' => 'required',
        'annee' => 'required|integer',
        'couleur' => 'required',
        'kilometrage' => 'required|numeric',
        'disponibilite' => 'required',
        'tarif' => 'required|numeric',
        'type_carburant' => 'required',
        'date_achat' => 'required|date',
        'date_mise_en_service' => 'required|date',
    ]);

    try {
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->update($request->all());

        return redirect()->route('admin/vehicules')->with('success', 'Véhicule mis à jour avec succès');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Une erreur est survenue lors de la mise à jour du véhicule. Veuillez réessayer.']);
    }
}


    /**
     * Supprime la ressource spécifiée du stockage.
     */
    public function destroy(string $id)
    {
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->delete();

        return redirect()->route('admin/vehicules')->with('success', 'Véhicule supprimé avec succès');
    }
}
