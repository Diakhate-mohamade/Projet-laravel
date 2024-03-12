<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicule;
use App\Models\Location;
use App\Models\Chauffeur;

class LocationContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::orderBy('created_at', 'DESC')->paginate(5); // Paginate avec 5 éléments par page
        return view('location.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all(); // Récupère tous les utilisateurs
        $vehicules = Vehicule::all(); // Récupère tous les véhicules
        $chauffeurs = Chauffeur::all();
        return view('location.create', compact('users', 'vehicules', 'chauffeurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // Valider les données du formulaire
    //     $request->validate([
    //         'user_id' => 'required',
    //         'numero_telephone' => 'required',
    //         'lieu_depart' => 'required',
    //         'lieu_arrivee' => 'required',
    //         'date' => 'required',
    //         'heure_debut' => 'required',
    //         'heure_fin' => 'required',
    //         'duree' => 'required',
    //         'montant' => 'required',
    //         'mode_paiement' => 'required',
    //         'numero_facture' => 'required',
    //         'chauffeur_id' => 'required',
    //         'vehicule_id' => 'required',
    //     ]);

    //     try {
    //         // Créer la nouvelle location avec les données du formulaire
    //         $location = new Location();
    //         $location->user_id = $request->user_id;
    //         $location->numero_telephone = $request->numero_telephone;
    //         $location->lieu_depart = $request->lieu_depart;
    //         $location->lieu_arrivee = $request->lieu_arrivee;
    //         $location->date = $request->date;
    //         $location->heure_debut = $request->heure_debut;
    //         $location->heure_fin = $request->heure_fin;
    //         $location->duree = $request->duree;
    //         $location->montant = $request->montant;
    //         $location->mode_paiement = $request->mode_paiement;
    //         $location->numero_facture = $request->numero_facture;
    //         $location->chauffeur_id = $request->chauffeur_id;
    //         $location->vehicule_id = $request->vehicule_id;
    //         $location->remarques = $request->remarques;
    //         $location->save();

    //         return redirect()->route('admin.home')->with('success', 'Location créée avec succès.');
    //     } catch (\Exception $e) {
    //         // Gérer les erreurs
    //         return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de la création de la location : ' . $e->getMessage());
    //     }
    // }
    /**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'user_id' => 'required',
        'numero_telephone' => 'required',
        'lieu_depart' => 'required',
        'lieu_arrivee' => 'required',
        'date' => 'required',
        'heure_debut' => 'required',
        'heure_fin' => 'required',
        'duree' => 'required',
        'montant' => 'required',
        'mode_paiement' => 'required',
        'numero_facture' => 'required',
        'chauffeur_id' => 'required',
        'vehicule_id' => 'required',
    ]);

    try {
        // Créer la nouvelle location avec les données du formulaire
        $location = new Location();
        $location->user_id = $request->user_id;
        $location->numero_telephone = $request->numero_telephone;
        $location->lieu_depart = $request->lieu_depart;
        $location->lieu_arrivee = $request->lieu_arrivee;
        $location->date = $request->date;
        $location->heure_debut = $request->heure_debut;
        $location->heure_fin = $request->heure_fin;
        $location->duree = $request->duree;
        $location->montant = $request->montant;
        $location->mode_paiement = $request->mode_paiement;
        $location->numero_facture = $request->numero_facture;
        $location->chauffeur_id = $request->chauffeur_id;
        $location->vehicule_id = $request->vehicule_id;
        $location->remarques = $request->remarques;
        $location->save();

        // Ajoutez un message de journalisation pour vérifier que la création de la location est réussie
        \Log::info('Location created successfully:', ['location_id' => $location->id]);

        // Redirigez l'utilisateur vers une page appropriée après la création de la location
        return redirect()->route('admin/locations')->with('success', 'Location créée avec succès.');
    } catch (\Exception $e) {
        // Gérer les erreurs
        // Ajoutez un message de journalisation pour capturer l'erreur
        \Log::error('Error creating location:', ['message' => $e->getMessage()]);

        return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de la création de la location.');
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $location = Location::findOrFail($id);
        return view('location.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = Location::findOrFail($id);
        return view('location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $location = Location::findOrFail($id);

        $location->update($request->all());

        return redirect()->route('admin.locations')->with('success', 'Location updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $location = Location::findOrFail($id);

        $location->delete();

        return redirect()->route('admin.locations')->with('success', 'Location deleted successfully');
    }
}
