<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Chauffeur;

class ChauffeurContoller extends Controller
{
    public function index()
    {
       //$chauffeur = Chauffeur::orderBy('created_at', 'DESC')->get();
        //return view('chauffeurs.index');

        // $chauffeur = Chauffeur::all(); // Assurez-vous de récupérer les chauffeurs depuis votre modèle Chauffeur
        // return view('chauffeurs.index', compact('chauffeur'));

        return view('chauffeurs.index',
        ['chauffeur'=>chauffeur::latest()->paginate(5)
      ]);

    }

    public function create()
    {
        return view('chauffeurs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'numero_chauffeur' => 'required|unique:chauffeurs', // Assure l'unicité du numéro de chauffeur
            'experience' => 'required|integer',
            'numero_permis' => 'required',
            'date_emission' => 'required|date',
            'date_expiration' => 'required|date',
            'categorie' => 'required',
            'evaluation' => 'nullable|numeric|min:1|max:5',
            'contrat' => 'nullable|string',
            'statut' => 'required|in:actif,en_congé,hors_service',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:1000',
        ]);

        // Renommer et déplacer le fichier photo téléchargé
        $photo = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('Chauffeur'), $photo);

        // Créer un nouvel objet Chauffeur et attribuer les valeurs
        $chauffeur = new Chauffeur();
        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->numero_chauffeur = $request->numero_chauffeur;
        $chauffeur->experience = $request->experience;
        $chauffeur->numero_permis = $request->numero_permis;
        $chauffeur->date_emission = $request->date_emission;
        $chauffeur->date_expiration = $request->date_expiration;
        $chauffeur->categorie = $request->categorie;
        $chauffeur->evaluation = $request->evaluation;
        $chauffeur->contrat = $request->contrat;
        $chauffeur->statut = $request->statut;
        $chauffeur->photo = $photo; // Nom de fichier de la photo

        // Enregistrer le chauffeur dans la base de données
        $chauffeur->save();

        // Redirection avec un message de succès
        return back()->withSuccess('Chauffeur créé avec succès !');
    }


    //Affiche le formulaire de modification d'un candidat
    public function edit(string $id)
    {
        $chauffeur = Chauffeur::findOrFail($id);
        return view('chauffeurs.edit', compact('chauffeur'));
    }
    // public function edit($id)
    // {
    //    $chauffeur = Chauffeur::where('id',$id)->first();
    //    return view('chauffeurs.edit',['Chauffeur' => $chauffeur]);

    // }

    // Met à jour un chauffeur dans la base de données
    public function update(Request $request, $id)
   {
        $request->validate([
            // Validation des champs requis et des contraintes sur les types de fichiers
            'nom' => 'required',
            'prenom' => 'required',
            'numero_chauffeur' => 'required',
            'experience' => 'required',
            'numero_permis' => 'required',
            'date_emission' => 'required',
            'date_expiration' => 'required',
            'categorie' => 'required',
            'evaluation' => 'nullable|numeric|min:1|max:5', // Validation pour l'évaluation
            'contrat' => 'nullable|string', // Modification pour le contrat
            'statut' => 'required|string', // Modification pour le statut
            'photo' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000',
       ]);

       $chauffeur = Chauffeur::findOrFail($id);

       if ($request->hasFile('photo')) {
          // Mise à jour de la photo
            $photo = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('Chauffeur'), $photo);
            $chauffeur->photo = $photo;
        }

        $chauffeur->nom = $request->nom;
        $chauffeur->prenom = $request->prenom;
        $chauffeur->numero_chauffeur = $request->numero_chauffeur;
        $chauffeur->experience = $request->experience;
        $chauffeur->numero_permis = $request->numero_permis;
        $chauffeur->date_emission = $request->date_emission;
        $chauffeur->date_expiration = $request->date_expiration;
        $chauffeur->categorie = $request->categorie;
        $chauffeur->evaluation = $request->evaluation;
        $chauffeur->contrat = $request->contrat;
        $chauffeur->statut = $request->statut;

        $chauffeur->save();

       return redirect()->route('admin/chauffeurs')->withSuccess('Chauffeur modifié avec succès !');
    }

     // Supprime un candidat de la base de donnée
    public function destroy($id)
    {
        $chauffeur = Chauffeur::where('id',$id)->first();
        $candidat->delete();
        return back()->withSuccess('chauffeur Supprime !!');
    }

    // Affiche les détails d'un candidat
    public function show($id)
    {
        $chauffeur = Chauffeur::where('id',$id)->first();

        return view('chauffeurs.show',['chauffeur' => $chauffeur]);
    }

}
