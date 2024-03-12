@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Home
            </h1>
        </div>
    </header>
    <hr />
    <main>
        {{-- correct --}}
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-gray-200 rounded-lg p-4">
                <h1 class="text-3xl font-bold text-center mb-8">Vehicles</h1>
                <div class="flex justify-center mb-8">
                    <label for="sortBy" class="mr-2">Sort By:</label>
                    <select class="form-control w-24 rounded-full" id="sortBy">
                        <option value="" {{ request()->sort == '' ? 'selected' : '' }}>Latest</option>
                        <option value="asc" {{ request()->sort == 'asc' ? 'selected' : '' }}>Ascending</option>
                        <option value="desc" {{ request()->sort == 'desc' ? 'selected' : '' }}>Descending</option>
                    </select>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @if ($vehicules->count() > 0)
                        @foreach ($vehicules as $v)
                            {{-- @if (auth()->check() && $rs->user_id == auth()->user()->id)
                            @if (auth()->check() && $v->id == auth()->location()->vehicule_id) --}}
                            <div class="bg-white shadow rounded p-4 relative">
                                <div class="absolute top-0 right-0 m-4">
                                    @if (Auth::check() && Auth::user()->usertype != '0')
                                        @if (!$v->sold)
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                data-bs-toggle="modal" data-bs-target="#validationModal"
                                                data-id="{{ $v->id }}">
                                                Valider
                                            </button>
                                        @else
                                            <span class="bg-red-500 text-white font-bold py-2 px-4 rounded">Sold</span>
                                        @endif
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Valider
                                        </a>
                                    @endif
                                </div>
                                <div class="flex justify-center mb-4">
                                    <img src="{{ asset('images/' . $v->image) }}" alt="{{ $v->matricule }}"
                                        style="height: 150px; width: 100%; object-fit: contain;">
                                </div>
                                <h3 class="text-xl font-bold mb-2 text-center">{{ $v->matricule }}</h3>
                                <h4 class="text-lg font-bold mb-2 text-center">
                                    ${{ number_format($v->tarif, 0, '.', '.') }}
                                </h4>
                                <p class="text-gray-600 text-center">{{ $v->description }}</p>
                            </div>
                            {{-- @endif --}}
                        @endforeach
                    @else
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body text-center p-3">
                                    <h4>Product Not Available</h4>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="validationModal" tabindex="-1" aria-labelledby="validationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="validationModalLabel">Reserver une location</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin/locations/store') }}" method="POST" id="reservationForm"
                        class="needs-validation" novalidate>
                        <div class="modal-body">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="user_id">User ID</label>
                                    {{-- @if (auth()->check() && $locations->user_id == auth()->user()->id) --}}
                                        <select class="custom-select" id="user_id" name="user_id" required>
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
                                    <input type="text" class="form-control" id="lieu_arrivee" name="lieu_arrivee"
                                        required>
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
                                    <input type="text" class="form-control" id="mode_paiement" name="mode_paiement"
                                        required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="numero_facture">Numéro de Facture</label>
                                    <input type="text" class="form-control" id="numero_facture" name="numero_facture"
                                        required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="chauffeur_id">Chauffeur ID</label>
                                    <select class="custom-select" id="chauffeur_id" name="chauffeur_id" required>
                                        <option value="">Sélectionnez un chauffeur</option>
                                        @foreach ($chauffeurs as $chauffeur)
                                            <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} -
                                                {{ $chauffeur->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="vehicule_id">Véhicule ID</label>
                                    <select class="custom-select" id="vehicule_id" name="vehicule_id" required>
                                        <option value="">Sélectionnez un véhicule</option>
                                        @foreach ($vehicules as $vehicule)
                                            <option value="{{ $vehicule->id }}">{{ $vehicule->marque }} -
                                                {{ $vehicule->matricule }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="remarques">Remarques</label>
                                    <textarea class="form-control" id="remarques" name="remarques" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const reservationForm = document.querySelector('#reservationForm');

                reservationForm.addEventListener('submit', function(event) {
                    event.preventDefault(); // Empêche l'envoi du formulaire par défaut

                    // Soumission du formulaire via fetch
                    fetch(reservationForm.action, {
                            method: reservationForm.method,
                            body: new FormData(reservationForm)
                        })
                        .then(response => {
                            if (response.ok) {
                                window.location
                                    .reload(); // Recharge la page après l'enregistrement de la réservation
                            } else {
                                console.error('La requête a échoué.');
                            }
                        })
                        .catch(error => {
                            console.error('Une erreur s\'est produite : ', error);
                        });
                });
            });
        </script>
        <script>
            const sortBy = document.getElementById('sortBy');
            sortBy.addEventListener('change', function() {
                const sort = 'sort=' + this.value + '';
                let url = "{{ route('admin/home', ':sort') }}";
                url = url.replace(':sort', sort);
                window.location.href = url;
            });
        </script>

    </main>
@endsection
