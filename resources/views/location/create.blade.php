@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
    {{-- <h1 class="font-bold text-2xl ml-3">Add Location</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <form action="{{ route('admin/locations/store') }}" method="POST">
                @csrf
                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">User ID</label>
                    <div class="mt-2">
                        <input type="text" name="user_id" id="user_id"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Numero de Téléphone</label>
                    <div class="mt-2">
                        <input id="numero_telephone" name="numero_telephone" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Lieu de Départ</label>
                    <div class="mt-2">
                        <input id="lieu_depart" name="lieu_depart" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Lieu d'Arrivée</label>
                    <div class="mt-2">
                        <input id="lieu_arrivee" name="lieu_arrivee" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Date</label>
                    <div class="mt-2">
                        <input id="date" name="date" type="date"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Heure de Début</label>
                    <div class="mt-2">
                        <input id="heure_debut" name="heure_debut" type="time"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Heure de Fin</label>
                    <div class="mt-2">
                        <input id="heure_fin" name="heure_fin" type="time"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Durée</label>
                    <div class="mt-2">
                        <input id="duree" name="duree" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Montant</label>
                    <div class="mt-2">
                        <input id="montant" name="montant" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Mode de Paiement</label>
                    <div class="mt-2">
                        <input id="mode_paiement" name="mode_paiement" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Numero de Facture</label>
                    <div class="mt-2">
                        <input id="numero_facture" name="numero_facture" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Chauffeur ID</label>
                    <div class="mt-2">
                        <input id="chauffeur_id" name="chauffeur_id" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Vehicule ID</label>
                    <div class="mt-2">
                        <input id="vehicule_id" name="vehicule_id" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Remarques</label>
                    <div class="mt-2">
                        <textarea id="remarques" name="remarques" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>

                <button type="submit"
                    class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
            </form>
        </div>
    </div> --}}
    <div class="container">
        <div class="card col-md-14 offset-5">
            <div class="card-header">
                <h2 class="text-center">Ajout Location</h2>
            </div>

            <div class="card-body">
                <form action="{{ route('admin/locations/store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="user_id">User ID</label>
                            {{-- @if (auth()->check() && $location->user_id == auth()->user()->id) --}}
                                <select class="form-control" id="user_id" name="user_id" required>
                                    <option value="">Sélectionnez un utilisateur</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            {{-- @endif --}}
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="numero_telephone">Numéro de Téléphone</label>
                            <input type="text" class="form-control" id="numero_telephone" name="numero_telephone"
                                required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="lieu_depart">Lieu de Départ</label>
                            <input type="text" class="form-control" id="lieu_depart" name="lieu_depart" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="lieu_arrivee">Lieu d'Arrivée</label>
                            <input type="text" class="form-control" id="lieu_arrivee" name="lieu_arrivee" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="heure_debut">Heure de Début</label>
                            <input type="time" class="form-control" id="heure_debut" name="heure_debut" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="heure_fin">Heure de Fin</label>
                            <input type="time" class="form-control" id="heure_fin" name="heure_fin" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="duree">Durée</label>
                            <input type="text" class="form-control" id="duree" name="duree" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="montant">Montant</label>
                            <input type="text" class="form-control" id="montant" name="montant" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="mode_paiement">Mode de Paiement</label>
                            <input type="text" class="form-control" id="mode_paiement" name="mode_paiement" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="numero_facture">Numéro de Facture</label>
                            <input type="text" class="form-control" id="numero_facture" name="numero_facture" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="chauffeur_id">Chauffeur ID</label>
                            <select class="form-control" id="chauffeur_id" name="chauffeur_id" required>
                                <option value="">Sélectionnez un chauffeur</option>
                                @foreach ($chauffeurs as $chauffeur)
                                    <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} - {{ $chauffeur->nom }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <div class="col-md-6 mb-3">
                                <label for="vehicule_id">Véhicule ID</label>
                                <select class="form-control" id="vehicule_id" name="vehicule_id" required>
                                    <option value="">Sélectionnez un véhicule</option>
                                    @foreach ($vehicules as $vehicule)
                                        <option value="{{ $vehicule->id }}">{{ $vehicule->marque }} -
                                            {{ $vehicule->matricule }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="remarques">Remarques</label>
                            <textarea class="form-control" id="remarques" name="remarques" rows="3"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>


@endsection
