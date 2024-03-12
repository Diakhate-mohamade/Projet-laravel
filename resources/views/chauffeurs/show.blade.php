@extends('layouts.app')

@section('title', 'Show Chauffeur')

@section('contents')


    {{-- <div class="py-6 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Nom</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->name }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Prénom</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->prenom }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Numéro de chauffeur</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->numero_chauffeur }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Expérience</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->experience }} ans</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Numéro de permis</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->numero_permis }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Date d'émission du permis</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->date_emission }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Date d'expiration du permis</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->date_expiration }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Catégorie</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->categorie }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Évaluation</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->evaluation }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Contrat</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->contrat }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Statut</label>
                            <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->statut }}</p>
                        </div>
                        <div class="border rounded-lg p-4 bg-gray-50">
                            <label class="block text-sm font-medium text-gray-700">Photo</label>
                            <div class="mt-1">
                                <img src="{{ asset('Chauffeur/' . $chauffeur->photo) }}" alt="Photo du chauffeur" class="w-40 h-40 object-cover rounded-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="py-6 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-1 flex justify-center md:justify-start">
                            <div>
                                <img src="{{ asset('Chauffeur/' . $chauffeur->photo) }}" alt="Photo du chauffeur" class="w-40 h-40 object-cover rounded-full">
                            </div>
                        </div>
                        <div class="md:col-span-1 grid grid-cols-1 gap-6">
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Nom</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->name }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Prénom</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->prenom }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Numéro de chauffeur</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->numero_chauffeur }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Expérience</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->experience }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Numéro de permis</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->numero_permis }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Date d'émission du permis</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->date_emission }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Date d'expiration du permis</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->date_expiration }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Catégorie</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->categorie }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Évaluation</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->evaluation }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Contrat</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->contrat }}</p>
                            </div>
                            <div class="border rounded-lg p-4 bg-gray-50">
                                <label class="block text-sm font-medium text-gray-700">Statut</label>
                                <p class="mt-1 text-lg font-semibold text-gray-900">{{ $chauffeur->statut }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="py-6 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-1 flex justify-center items-center">
                            <div class="w-64 bg-gray-200 p-6 rounded-lg border border-gray-300">
                                <div class="bg-white text-center p-4 rounded-md shadow-md">
                                    <div class="w-24 h-24 mx-auto bg-gray-300 rounded-full flex justify-center items-center">
                                        <img src="{{ asset('Chauffeur/' . $chauffeur->photo) }}" alt="Photo du chauffeur" class="w-20 h-20 object-cover rounded-full">
                                    </div>
                                    <h3 class="mt-4 text-lg font-semibold text-gray-900">{{ $chauffeur->name }} {{ $chauffeur->prenom }}</h3>
                                    <p class="mt-2 text-sm text-gray-700">Numéro de chauffeur: {{ $chauffeur->numero_chauffeur }}</p>
                                    <p class="mt-2 text-sm text-gray-700">Catégorie: {{ $chauffeur->categorie }}</p>
                                    <p class="mt-2 text-sm text-gray-700">Expérience: {{ $chauffeur->experience }} ans</p>
                                    <p class="mt-2 text-sm text-gray-700">Évaluation: {{ $chauffeur->evaluation }}</p>
                                    <div class="mt-4 border-t pt-4">
                                        <p class="text-sm text-gray-700">Permis de conduire</p>
                                        <p class="text-sm text-gray-700">Numéro: {{ $chauffeur->numero_permis }}</p>
                                        <p class="text-sm text-gray-700">Délivré le: {{ $chauffeur->date_emission }}</p>
                                        <p class="text-sm text-gray-700">Expirant le: {{ $chauffeur->date_expiration }}</p>
                                        <p class="text-sm text-gray-700">Statut: {{ $chauffeur->statut }}</p>
                                        <p class="text-sm text-gray-700">Contrat: {{ $chauffeur->contrat }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="py-6 bg-gray-100">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-1 flex justify-center items-center">
                            <div class="w-64 bg-gray-200 p-6 rounded-lg border border-gray-300">
                                <div class="bg-white text-center p-4 rounded-md shadow-md">
                                    <div class="w-20 h-20 mx-auto bg-gray-300 rounded-full flex justify-center items-center">
                                        <img src="{{ asset('Chauffeur/' . $chauffeur->photo) }}" alt="Photo du chauffeur" class="w-16 h-16 object-cover rounded-full">
                                    </div>
                                    <h3 class="mt-4 text-lg font-semibold text-gray-900">{{ $chauffeur->name }} {{ $chauffeur->prenom }}</h3>
                                    <p class="mt-2 text-sm text-gray-700">Numéro de chauffeur: {{ $chauffeur->numero_chauffeur }}</p>
                                    <p class="mt-2 text-sm text-gray-700">Catégorie: {{ $chauffeur->categorie }}</p>
                                    <p class="mt-2 text-sm text-gray-700">Expérience: {{ $chauffeur->experience }} ans</p>
                                    <p class="mt-2 text-sm text-gray-700">Évaluation: {{ $chauffeur->evaluation }}</p>
                                    <div class="mt-4 border-t pt-4">
                                        <p class="text-sm text-gray-700">Permis de conduire</p>
                                        <p class="text-sm text-gray-700">Numéro: {{ $chauffeur->numero_permis }}</p>
                                        <p class="text-sm text-gray-700">Délivré le: {{ $chauffeur->date_emission }}</p>
                                        <p class="text-sm text-gray-700">Expirant le: {{ $chauffeur->date_expiration }}</p>
                                        <p class="text-sm text-gray-700">Statut: {{ $chauffeur->statut }}</p>
                                        <p class="text-sm text-gray-700">Contrat: {{ $chauffeur->contrat }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="py-6 bg-gray-100">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Informations personnelles à gauche -->
                        <div class="md:col-span-1">
                            <div class="w-64 bg-gray-200 p-6 rounded-lg border border-gray-300">
                                <div class="bg-white text-center p-4 rounded-md shadow-md">
                                    <!-- Photo -->
                                    <div class="w-20 h-20 mx-auto bg-gray-300 rounded-full flex justify-center items-center">
                                        <img src="http://127.0.0.1:8000/Chauffeur/1710080825.jpg" alt="Photo du chauffeur" class="w-16 h-16 object-cover rounded-full">
                                    </div>
                                    <!-- Informations personnelles -->
                                    <h3 class="mt-4 text-lg font-semibold text-gray-900"> {{ $chauffeur->prenom }} {{ $chauffeur->name }}</h3>
                                    <div class="grid grid-cols-2 gap-4 mt-2 text-sm text-gray-700">
                                        <div class="text-left">
                                            <p>Numéro:</p>
                                            <p>Catégorie:</p>
                                            <p>Expérience:</p>
                                            <p>Évaluation:</p>
                                        </div>
                                        <div class="text-left">
                                            <p>{{ $chauffeur->numero_chauffeur }}</p>
                                            <p>{{ $chauffeur->categorie }}</p>
                                            <p>{{ $chauffeur->experience }} ans</p>
                                            <p>{{ $chauffeur->evaluation }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Permis de conduire à droite -->
                        <div class="md:col-span-1">
                            <div class="bg-gray-200 p-6 rounded-lg border border-gray-300">
                                <div class="bg-white text-center p-4 rounded-md shadow-md">
                                    <p class="text-sm text-gray-700 font-semibold">Permis de conduire</p>
                                    <div class="grid grid-cols-2 gap-4 mt-2 text-sm text-gray-700">
                                        <div class="text-left">
                                            <p>Numéro:</p>
                                            <p>Délivré le:</p>
                                            <p>Expirant le:</p>
                                            <p>Statut:</p>
                                            <p>Contrat:</p>
                                        </div>
                                        <div class="text-left">
                                            <p>{{ $chauffeur->numero_permis }}</p>
                                            <p>{{ $chauffeur->date_emission }}</p>
                                            <p>{{ $chauffeur->date_expiration }}</p>
                                            <p>{{ $chauffeur->statut }}</p>
                                            <p>{{ $chauffeur->contrat}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <div class="py-6 bg-gray-100">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Informations personnelles à gauche -->
                        <div class="md:col-span-1 md:flex justify-center">
                            <div class="w-full md:w-1/2 bg-gray-200 p-6 rounded-lg border border-gray-300">
                                <div class="bg-white text-center p-4 rounded-md shadow-md">
                                    <!-- Photo -->
                                    <div class="w-20 h-20 mx-auto bg-gray-300 rounded-full flex justify-center items-center">
                                        <img src="http://127.0.0.1:8000/Chauffeur/1710080825.jpg" alt="Photo du chauffeur" class="w-16 h-16 object-cover rounded-full">
                                    </div>
                                    <!-- Informations personnelles -->
                                    <h3 class="mt-4 text-lg font-semibold text-gray-900"> {{ $chauffeur->prenom }} {{ $chauffeur->name }}</h3>
                                    <div class="grid grid-cols-2 gap-4 mt-2 text-sm text-gray-700">
                                        <div class="text-left">
                                            <p>Numéro:</p>
                                            <p>Catégorie:</p>
                                            <p>Expérience:</p>
                                            <p>Évaluation:</p>
                                        </div>
                                        <div class="text-left">
                                            <p>{{ $chauffeur->numero_chauffeur }}</p>
                                            <p>{{ $chauffeur->categorie }}</p>
                                            <p>{{ $chauffeur->experience }} ans</p>
                                            <p>{{ $chauffeur->evaluation }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Permis de conduire à droite -->
                        <div class="md:col-span-1 md:flex justify-center">
                            <div class="w-full md:w-1/2 bg-gray-200 p-6 rounded-lg border border-gray-300">
                                <div class="bg-white text-center p-4 rounded-md shadow-md">
                                    <p class="text-sm text-gray-700 font-semibold">Permis de conduire</p>
                                    <div class="grid grid-cols-2 gap-4 mt-2 text-sm text-gray-700">
                                        <div class="text-left">
                                            <p>Numéro:</p>
                                            <p>Délivré le:</p>
                                            <p>Expirant le:</p>
                                            <p>Statut:</p>
                                            <p>Contrat:</p>
                                        </div>
                                        <div class="text-left">
                                            <p>{{ $chauffeur->numero_permis }}</p>
                                            <p>{{ $chauffeur->date_emission }}</p>
                                            <p>{{ $chauffeur->date_expiration }}</p>
                                            <p>{{ $chauffeur->statut }}</p>
                                            <p>{{ $chauffeur->contrat}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="py-6 bg-gray-100">
        <div class="max-w-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Informations personnelles à gauche -->
                        <div class="md:col-span-1 md:flex justify-center">
                            <div class="w-full md:w-9/10 bg-gray-200 p-6 rounded-lg border border-gray-300">
                                <div class="bg-white text-center p-4 rounded-md shadow-md">
                                    <!-- Photo -->
                                    <div class="w-20 h-20 mx-auto bg-gray-300 rounded-full flex justify-center items-center">
                                        <img src="http://127.0.0.1:8000/Chauffeur/1710080825.jpg" alt="Photo du chauffeur" class="w-16 h-16 object-cover rounded-full">
                                    </div>
                                    <!-- Informations personnelles -->
                                    <h3 class="mt-4 text-lg font-semibold text-gray-900"> {{ $chauffeur->prenom }} {{ $chauffeur->name }}</h3>
                                    <div class="grid grid-cols-2 gap-4 mt-2 text-sm text-gray-700">
                                        <div class="text-left">
                                            <p>Numéro:</p>
                                            <p>Catégorie:</p>
                                            <p>Expérience:</p>
                                            <p>Évaluation:</p>
                                        </div>
                                        <div class="text-left">
                                            <p>{{ $chauffeur->numero_chauffeur }}</p>
                                            <p>{{ $chauffeur->categorie }}</p>
                                            <p>{{ $chauffeur->experience }} ans</p>
                                            <p>{{ $chauffeur->evaluation }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Permis de conduire à droite -->
                        <div class="md:col-span-1 md:flex justify-center">
                            <div class="w-full md:w-9/10 bg-gray-200 p-6 rounded-lg border border-gray-300">
                                <div class="bg-white text-center p-4 rounded-md shadow-md">
                                    <p class="text-sm text-gray-700 font-semibold">Permis de conduire</p>
                                    <div class="grid grid-cols-2 gap-4 mt-2 text-sm text-gray-700">
                                        <div class="text-left">
                                            <p>Numéro:</p>
                                            <p>Délivré le:</p>
                                            <p>Expirant le:</p>
                                            <p>Statut:</p>
                                            <p>Contrat:</p>
                                        </div>
                                        <div class="text-left">
                                            <p>{{ $chauffeur->numero_permis }}</p>
                                            <p>{{ $chauffeur->date_emission }}</p>
                                            <p>{{ $chauffeur->date_expiration }}</p>
                                            <p>{{ $chauffeur->statut }}</p>
                                            <p>{{ $chauffeur->contrat}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
