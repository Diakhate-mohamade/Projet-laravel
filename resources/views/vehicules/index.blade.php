@extends('layouts.app')
@section('title', 'Home Vehicule List')
@section('contents')

    <div class="px-4 py-6 sm:px-0">
        <div class="border-4 border-gray-200 rounded-lg p-4">
            <h1 class="text-3xl font-bold text-center mb-8">Vehicles
                <a href="{{ route('admin/vehicules/create') }}"
                    class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                    Vehicule
                </a>
                <hr />
            </h1>
            <div class="flex justify-center mb-8">
                <label for="sortBy" class="mr-2">Sort By:</label>
                <select class="form-control w-24 rounded-full" id="sortBy">
                    <option value="" {{ request()->sort == '' ? 'selected' : '' }}>Latest</option>
                    <option value="asc" {{ request()->sort == 'asc' ? 'selected' : '' }}>Ascending</option>
                    <option value="desc" {{ request()->sort == 'desc' ? 'selected' : '' }}>Descending</option>
                </select>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @if ($vehicule->count() > 0)
                    @foreach ($vehicule as $v)
                        <div class="bg-white shadow rounded p-4 relative">
                            <div class="absolute top-0 right-0 m-4">
                                @if (!$v->sold)
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                        data-bs-toggle="modal" data-bs-target="#validationModal"
                                        data-id="{{ $v->id }}">
                                        Valider
                                    </button>
                                @else
                                    <span class="bg-red-500 text-white font-bold py-2 px-4 rounded">Sold</span>
                                @endif
                            </div>
                            <div class="flex justify-center mb-4">
                                <img src="{{ asset('images/' . $v->image) }}" alt="{{ $v->matricule }}"
                                    style="height: 150px; width: 100%; object-fit: contain;">
                            </div>
                            <h3 class="text-xl font-bold mb-2 text-center">{{ $v->matricule }}</h3>
                            <h4 class="text-lg font-bold mb-2 text-center">${{ number_format($v->tarif, 0, '.', '.') }}
                            </h4>
                            <p class="text-gray-600 text-center">{{ $v->description }}</p>
                            <div class="flex justify-center mt-4">
                                <a href="{{ route('admin/vehicules/show', $v->id) }}" class="btn btn-info mr-2"><i
                                        class="fas fa-eye"></i> View</a>
                                <a href="{{ route('admin/vehicules/edit', $v->id) }}" class="btn btn-primary mr-2"><i
                                        class="fas fa-edit"></i> Edit</a>
                                <form action="{{ route('admin/vehicules/destroy', $v->id) }}" method="POST"
                                    onsubmit="return confirm('Delete?')" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>
                                        Delete</button>
                                </form>
                            </div>
                        </div>
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
    <div class="modal fade" id="validationModal" tabindex="-1" aria-labelledby="validationModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="validationModalLabel">Reserver une location</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <form action="{{ route('admin/locations/store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                                <label for="user_id">User ID</label>
                                <select class="form-control" id="user_id" name="user_id" required>
                                    <option value="">Sélectionnez un utilisateur</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="numero_telephone">Numéro de Téléphone</label>
                            <input type="text" class="form-control" id="numero_telephone" name="numero_telephone" required>
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
                                @foreach($chauffeurs as $chauffeur)
                                    <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} - {{ $chauffeur->nom }}</option>
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
                                    @foreach($vehicule as $vehicule)
                                        <option value="{{ $vehicule->id }}">{{ $vehicule->marque }} - {{ $vehicule->matricule }}</option>
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
                </form> --}}
                <form action="{{ route('admin/locations/store') }}" method="POST" id="reservationForm" class="needs-validation" novalidate>
                    <div class="modal-body">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="user_id">User ID</label>
                                <select class="custom-select" id="user_id" name="user_id" required>
                                    <option value="">Sélectionnez un utilisateur</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="numero_telephone">Numéro de Téléphone</label>
                                <input type="text" class="form-control" id="numero_telephone" name="numero_telephone" required>
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
                                <select class="custom-select" id="chauffeur_id" name="chauffeur_id" required>
                                    <option value="">Sélectionnez un chauffeur</option>
                                    @foreach ($chauffeurs as $chauffeur)
                                        <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} - {{ $chauffeur->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="vehicule_id">Véhicule ID</label>
                                <select class="custom-select" id="vehicule_id" name="vehicule_id" required>
                                    <option value="">Sélectionnez un véhicule</option>
                                    @foreach ($vehicule as $vehicule)
                                        <option value="{{ $vehicule->id }}">{{ $vehicule->marque }} - {{ $vehicule->matricule }}</option>
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
                        window.location.reload(); // Recharge la page après l'enregistrement de la réservation
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

    <!-- /.content -->
@endsection
