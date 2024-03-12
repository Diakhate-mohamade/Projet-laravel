@extends('layouts.app')

@section('title', 'Show Location')

@section('contents')
<div class="bg-gray-100 py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Détail de la location</h1>
    </div>
</div>

{{-- <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nom Client</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->user->name }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Numero Telephone</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->numero_telephone }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Lieu Depart</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->lieu_depart }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Lieu Arrivee</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->lieu_arrivee }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Date</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->date }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Heure Debut</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->heure_debut }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Heure Fin</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->heure_fin }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Durée</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->duree }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Montant</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->montant }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Mode Paiement</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->mode_paiement }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Numero Facture</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->numero_facture }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Chauffeur </label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->chauffeur->nom }}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Vehicule</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->vehicule->marque}}</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Remarques</label>
                        <p class="mt-2 text-lg font-semibold text-gray-900">{{ $location->remarques }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div class="detail-item">
                        <span class="detail-label">Nom Client :</span>
                        <span class="detail-value">{{ $location->user->name }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Numero Telephone :</span>
                        <span class="detail-value">{{ $location->numero_telephone }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Lieu Depart :</span>
                        <span class="detail-value">{{ $location->lieu_depart }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Lieu Arrivee :</span>
                        <span class="detail-value">{{ $location->lieu_arrivee }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Date :</span>
                        <span class="detail-value">{{ $location->date }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Heure Debut :</span>
                        <span class="detail-value">{{ $location->heure_debut }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Heure Fin :</span>
                        <span class="detail-value">{{ $location->heure_fin }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Durée :</span>
                        <span class="detail-value">{{ $location->duree }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Montant :</span>
                        <span class="detail-value">{{ $location->montant }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Mode Paiement :</span>
                        <span class="detail-value">{{ $location->mode_paiement }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Numero Facture :</span>
                        <span class="detail-value">{{ $location->numero_facture }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Chauffeur :</span>
                        <span class="detail-value">{{ $location->chauffeur->nom }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Vehicule :</span>
                        <span class="detail-value">{{ $location->vehicule->marque}}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Remarques :</span>
                        <span class="detail-value">{{ $location->remarques }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <section class="py-6">
    <div class="container">
        <div class="bg-white shadow-sm rounded-lg p-6">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-900 mb-4">Facture de Réservation</h2>
                    <p class="text-sm font-medium text-gray-700">Numéro de Facture :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->numero_facture }}</p>
                </div>
                <div class="text-right">
                    <p class="text-sm font-medium text-gray-700">Date de Facturation :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ now()->format('d/m/Y') }}</p>
                </div>
                <div class="col-span-2">
                    <hr class="my-4 border-gray-300">
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Nom Client :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->user->name }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Numéro de Téléphone :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->numero_telephone }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Lieu de Départ :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->lieu_depart }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Lieu d'Arrivée :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->lieu_arrivee }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Date :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->date }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Heure de Début :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->heure_debut }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Heure de Fin :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->heure_fin }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Durée :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->duree }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Montant :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->montant }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Mode de Paiement :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->mode_paiement }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Chauffeur :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->chauffeur->nom }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Véhicule :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->vehicule->marque}}</p>
                </div>
                <div class="col-span-2">
                    <hr class="my-4 border-gray-300">
                </div>
                <div class="col-span-2">
                    <p class="text-sm font-medium text-gray-700">Remarques :</p>
                    <p class="mt-1 text-lg font-semibold text-gray-900">{{ $location->remarques }}</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="py-4">
    <div class="container">
        <div class="bg-white shadow-sm rounded-lg p-4">
            <h2 class="text-lg font-semibold text-gray-900 mb-4">Facture de Réservation</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-4">
                <div>
                    <p class="text-sm font-medium text-gray-700">Client :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->user->name }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Téléphone :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->numero_telephone }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Départ :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->lieu_depart }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Arrivée :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->lieu_arrivee }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Date :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->date }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Heure :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->heure_debut }} - {{ $location->heure_fin }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Durée :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->duree }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Montant :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->montant }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Paiement :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->mode_paiement }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Chauffeur :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->chauffeur->nom }}</p>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-700">Véhicule :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->vehicule->marque}}</p>
                </div>
                <div class="col-span-2">
                    <hr class="my-4 border-gray-300">
                    <p class="text-sm font-medium text-gray-700">Remarques :</p>
                    <p class="text-base font-semibold text-gray-900">{{ $location->remarques }}</p>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
