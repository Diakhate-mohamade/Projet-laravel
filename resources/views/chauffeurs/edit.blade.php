@extends('layouts.app')

@section('title', 'Modifier Chauffeur')

@section('contents')
<div class="container">
    <div class="card col-md-14 offset-5">
        <div class="card-header">
            <h2 class="text-center">Modifier Chauffeurs</h2>
        </div>

        <div class="card-body">
            <div class="border-b border-gray-900/10 pb-12">
                <form action="{{ route('admin/chauffeurs/update', $chauffeur->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Nom</label>
                            <input type="text" name="nom" id="nom" value="{{ $chauffeur->nom }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Prénom</label>
                            <input type="text" name="prenom" id="prenom" value="{{ $chauffeur->prenom }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Numéro Chauffeur</label>
                            <input type="text" name="numero_chauffeur" id="numero_chauffeur" value="{{ $chauffeur->numero_chauffeur }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Expérience</label>
                            <input type="number" name="experience" id="experience" value="{{ $chauffeur->experience }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Numéro Permis</label>
                            <input type="text" name="numero_permis" id="numero_permis" value="{{ $chauffeur->numero_permis }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Date d'émission</label>
                            <input type="date" name="date_emission" id="date_emission" value="{{ $chauffeur->date_emission }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Date d'expiration</label>
                            <input type="date" name="date_expiration" id="date_expiration" value="{{ $chauffeur->date_expiration }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Catégorie</label>
                            <input type="text" name="categorie" id="categorie" value="{{ $chauffeur->categorie }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Évaluation</label>
                            <input type="number" name="evaluation" id="evaluation" value="{{ $chauffeur->evaluation }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Contrat</label>
                            <textarea name="contrat" id="contrat" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $chauffeur->contrat }}</textarea>
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Statut</label>
                            <select name="statut" id="statut" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option value="actif" {{ $chauffeur->statut === 'actif' ? 'selected' : '' }}>Actif</option>
                                <option value="en_congé" {{ $chauffeur->statut === 'en_congé' ? 'selected' : '' }}>En congé</option>
                                <option value="hors_service" {{ $chauffeur->statut === 'hors_service' ? 'selected' : '' }}>Hors service</option>
                            </select>
                        </div>
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
                            <input type="file" name="photo" id="photo" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>
                    </div>
                    <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mettre à jour</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
