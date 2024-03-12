@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
<h1 class="font-bold text-2xl ml-3">Add Vehicule</h1>
<hr />
<div class="container">

    <div class="card col-md-14 offset-5">
        <div class="card-header">
            <h2 class="text-center">Ajout Véhicules</h2>
        </div>

        <div class="card-body">
            <form action="{{ route('admin/vehicules/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="marque">Marque</label>
                        <input type="text" class="form-control" id="marque" name="marque" required>
                        <div class="invalid-feedback">
                            Veuillez saisir une marque valide.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="matricule">Matricule</label>
                        <input type="text" class="form-control" id="matricule" name="matricule" required>
                        <div class="invalid-feedback">
                            Veuillez saisir un matricule valide.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="modele">Modèle</label>
                        <input type="text" class="form-control" id="modele" name="modele" required>
                        <div class="invalid-feedback">
                            Veuillez saisir un modèle valide.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        <div class="invalid-feedback">
                            Veuillez saisir une description valide.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    {{-- <div class="col-md-6 mb-3">
                        <label for="type_permis_requis">Type de permis requis</label>
                        <input type="text" class="form-control" id="type_permis_requis" name="type_permis_requis" required>
                        <div class="invalid-feedback">
                            Veuillez saisir un type de permis requis valide.
                        </div>
                    </div> --}}
                    <div class="col-md-6 mb-3">
                        <label for="type_permis_requis">Type de permis requis</label>
                        <select class="form-control" id="type_permis_requis" name="type_permis_requis" required>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        <div class="invalid-feedback">
                            Veuillez sélectionner un statut valide.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="annee">Année</label>

                        <select class="form-control" id="annee" name="annee" required>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">200</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2000</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                        <div class="invalid-feedback">
                            Veuillez saisir une année valide.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="couleur">Couleur</label>
                        <input type="text" class="form-control" id="couleur" name="couleur" required>
                        <div class="invalid-feedback">
                            Veuillez saisir une couleur valide.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kilometrage">Kilométrage</label>
                        <input type="text" class="form-control" id="kilometrage" name="kilometrage" required>
                        <div class="invalid-feedback">
                            Veuillez saisir un kilométrage valide.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="disponibilite">Disponibilité</label>
                        <input type="text" class="form-control" id="disponibilite" name="disponibilite" required>
                        <div class="invalid-feedback">
                            Veuillez saisir une disponibilité valide.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tarif">Tarif</label>
                        <input type="text" class="form-control" id="tarif" name="tarif" required>
                        <div class="invalid-feedback">
                            Veuillez saisir un tarif valide.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="type_carburant">Type de carburant</label>
                        <input type="text" class="form-control" id="type_carburant" name="type_carburant" required>
                        <div class="invalid-feedback">
                            Veuillez saisir un type de carburant valide.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                        <div class="invalid-feedback">
                            Veuillez saisir une URL d'image valide.
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="date_achat">Date d'achat</label>
                        <input type="date" class="form-control" id="date_achat" name="date_achat" required>
                        <div class="invalid-feedback">
                            Veuillez saisir une date d'achat valide.
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="date_mise_en_service">Date de mise en service</label>
                        <input type="date" class="form-control" id="date_mise_en_service" name="date_mise_en_service" required>
                        <div class="invalid-feedback">
                            Veuillez saisir une date de mise en service valide.
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>

@endsection
