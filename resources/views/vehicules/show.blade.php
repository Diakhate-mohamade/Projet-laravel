
@extends('layouts.app')

@section('title', 'Show Vehicule')

@section('contents')

{{-- <section id="vehicle-details" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="vehicleCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- Ajout de l'image du véhicule avec animation -->
                            <img src="{{ asset('images/' . $vehicule->image) }}" class="d-block w-100" alt="Image du Véhicule">
                        </div>
                        <!-- Ajoutez d'autres images du véhicule si nécessaire -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#vehicleCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#vehicleCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="details-wrapper">
                    <h2 class="mb-4">{{ $vehicule->modele }}</h2>
                    <div class="detail-item">
                        <span class="detail-label">Matricule :</span>
                        <span class="detail-value">{{ $vehicule->matricule }}</span>
                    </div>
                    <!-- Ajoutez d'autres détails du véhicule -->
                    <div class="detail-item">
                        <span class="detail-label">Disponibilité :</span>
                        <span class="detail-value">{{ $vehicule->disponibilite }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Tarif par jour :</span>
                        <span class="detail-value">{{ $vehicule->tarif }} $</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Type carburant :</span>
                        <span class="detail-value">{{ $vehicule->type_carburant }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Année de mise en service :</span>
                        <span class="detail-value">{{ $vehicule->annee }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Kilométrage :</span>
                        <span class="detail-value">{{ $vehicule->kilometrage }} km</span>
                    </div>
                    <button type="button" class="btn btn-primary mt-4">Réserver maintenant</button>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="vehicle-details" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div id="vehicleCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- Ajout de l'image du véhicule avec animation -->
                            <img src="{{ asset('images/' . $vehicule->image) }}" class="d-block w-100" alt="Image du Véhicule">
                        </div>
                        <!-- Ajoutez d'autres images du véhicule si nécessaire -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#vehicleCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#vehicleCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="details-wrapper">
                    <h2 class="mb-4">{{ $vehicule->modele }}</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="detail-item">
                                <span class="detail-label">Matricule :</span>
                                <span class="detail-value">{{ $vehicule->matricule }}</span>
                            </div>
                            <!-- Ajoutez d'autres détails du véhicule -->
                            <div class="detail-item">
                                <span class="detail-label">Année de mise en service :</span>
                                <span class="detail-value">{{ $vehicule->annee }}</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Kilométrage :</span>
                                <span class="detail-value">{{ $vehicule->kilometrage }} km</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="detail-item">
                                <span class="detail-label">Disponibilité :</span>
                                <span class="detail-value">{{ $vehicule->disponibilite }}</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Tarif par jour :</span>
                                <span class="detail-value">{{ $vehicule->tarif }} $</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Type carburant :</span>
                                <span class="detail-value">{{ $vehicule->type_carburant }}</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary mt-4">Réserver maintenant</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
