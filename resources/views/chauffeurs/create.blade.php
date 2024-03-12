@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    <div class="container" >

        <div class="card col-md-14 offset-5">
            <div class="card-header">
                <h2 class="text-center">Ajout Chauffeurs</h2>
            </div>

            <div class="card-body">
                <form action="{{route('admin/chauffeurs/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir un nom valide.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                            <div class="invalid-feedback">
                                Veuillez saisir un prénom valide.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="numero_chauffeur">Numéro Chauffeur</label>
                            <input type="text" class="form-control" id="numero_chauffeur" name="numero_chauffeur"
                                required>
                            <div class="invalid-feedback">
                                Veuillez saisir un numéro de chauffeur valide.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="experience">Expérience</label>
                            <input type="number" class="form-control" id="experience" name="experience" required>
                            <div class="invalid-feedback">
                                Veuillez saisir une expérience valide.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="numero_permis">Numéro Permis</label>
                            <input type="text" class="form-control" id="numero_permis" name="numero_permis" required>
                            <div class="invalid-feedback">
                                Veuillez saisir un numéro de permis valide.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="date_emission">Date d'émission</label>
                            <input type="date" class="form-control" id="date_emission" name="date_emission" required>
                            <div class="invalid-feedback">
                                Veuillez saisir une date d'émission valide.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="date_expiration">Date d'expiration</label>
                            <input type="date" class="form-control" id="date_expiration" name="date_expiration" required>
                            <div class="invalid-feedback">
                                Veuillez saisir une date d'expiration valide.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="categorie">Catégorie</label>
                            <input type="text" class="form-control" id="categorie" name="categorie" required>
                            <div class="invalid-feedback">
                                Veuillez saisir une catégorie valide.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="evaluation">Évaluation</label>
                            <input type="number" class="form-control" id="evaluation" name="evaluation">
                            <div class="invalid-feedback">
                                Veuillez saisir une évaluation valide.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contrat">Contrat</label>
                            <input type="file" class="form-control" id="contrat" name="contrat" rows="3" required>
                            <div class="invalid-feedback">
                                Veuillez donner un contrat valide.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="statut">Statut</label>
                            <select class="form-control" id="statut" name="statut" required>
                                <option value="actif">Actif</option>
                                <option value="en_congé">En congé</option>
                                <option value="hors_service">Hors service</option>
                            </select>
                            <div class="invalid-feedback">
                                Veuillez sélectionner un statut valide.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Photo</label>
                            <input type="file" class="form-control-file" id="" name="photo" required>
                            <div class="invalid-feedback">
                                Veuillez sélectionner une photo.
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </form>
            </div>

        </div>
    </div>

@endsection
