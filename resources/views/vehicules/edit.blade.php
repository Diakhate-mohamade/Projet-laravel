@extends('layouts.app')

@section('title', 'Edit Vehicule')

@section('contents')

<div class="container">

    <div class="card col-md-14 offset-5">
        <div class="card-header">
            <h2 class="text-center">Modifier Vehicule</h2>
        </div>

        <div class="card-body">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2">
                    <form action="{{ route('admin/vehicules/update', $vehicule->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="marque" class="block text-sm font-medium leading-6 text-gray-900">Marque</label>
                            <input type="text" name="marque" id="marque" value="{{ $vehicule->marque }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="matricule" class="block text-sm font-medium leading-6 text-gray-900">Matricule</label>
                            <input type="text" name="matricule" id="matricule" value="{{ $vehicule->matricule }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="modele" class="block text-sm font-medium leading-6 text-gray-900">Modele</label>
                            <input type="text" name="modele" id="modele" value="{{ $vehicule->modele }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                            <textarea name="description" id="description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">{{ $vehicule->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="type_permis_requis" class="block text-sm font-medium leading-6 text-gray-900">Type permis requis</label>
                            <input type="text" name="type_permis_requis" id="type_permis_requis" value="{{ $vehicule->type_permis_requis }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="annee" class="block text-sm font-medium leading-6 text-gray-900">Annee</label>
                            <input type="text" name="annee" id="annee" value="{{ $vehicule->annee }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="couleur" class="block text-sm font-medium leading-6 text-gray-900">Couleur</label>
                            <input type="text" name="couleur" id="couleur" value="{{ $vehicule->couleur }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="kilometrage" class="block text-sm font-medium leading-6 text-gray-900">Kilometrage</label>
                            <input type="text" name="kilometrage" id="kilometrage" value="{{ $vehicule->kilometrage }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="disponibilite" class="block text-sm font-medium leading-6 text-gray-900">Disponibilite</label>
                            <input type="text" name="disponibilite" id="disponibilite" value="{{ $vehicule->disponibilite }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="tarif" class="block text-sm font-medium leading-6 text-gray-900">Tarif</label>
                            <input type="text" name="tarif" id="tarif" value="{{ $vehicule->tarif }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="type_carburant" class="block text-sm font-medium leading-6 text-gray-900">Type carburant</label>
                            <input type="text" name="type_carburant" id="type_carburant" value="{{ $vehicule->type_carburant }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                            <input type="file" name="image" id="image" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="date_achat" class="block text-sm font-medium leading-6 text-gray-900">Date achat</label>
                            <input type="date" name="date_achat" id="date_achat" value="{{ $vehicule->date_achat }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="mb-3">
                            <label for="date_mise_en_service" class="block text-sm font-medium leading-6 text-gray-900">Date mise en service</label>
                            <input type="date" name="date_mise_en_service" id="date_mise_en_service" value="{{ $vehicule->date_mise_en_service }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
                        </div>

                        <div class="flex justify-center">
                            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2">
        <form action="{{ route('admin/vehicules/update', $vehicule->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="sm:col-span-1">
                <label for="marque" class="block text-sm font-medium leading-6 text-gray-900">Marque</label>
                <input type="text" name="marque" id="marque" value="{{ $vehicule->marque }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="matricule" class="block text-sm font-medium leading-6 text-gray-900">Matricule</label>
                <input type="text" name="matricule" id="matricule" value="{{ $vehicule->matricule }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="modele" class="block text-sm font-medium leading-6 text-gray-900">Modele</label>
                <input type="text" name="modele" id="modele" value="{{ $vehicule->modele }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                <textarea name="description" id="description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">{{ $vehicule->description }}</textarea>
            </div>

            <div class="sm:col-span-1">
                <label for="type_permis_requis" class="block text-sm font-medium leading-6 text-gray-900">Type permis requis</label>
                <input type="text" name="type_permis_requis" id="type_permis_requis" value="{{ $vehicule->type_permis_requis }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="annee" class="block text-sm font-medium leading-6 text-gray-900">Annee</label>
                <input type="text" name="annee" id="annee" value="{{ $vehicule->annee }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="couleur" class="block text-sm font-medium leading-6 text-gray-900">Couleur</label>
                <input type="text" name="couleur" id="couleur" value="{{ $vehicule->couleur }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="kilometrage" class="block text-sm font-medium leading-6 text-gray-900">Kilometrage</label>
                <input type="text" name="kilometrage" id="kilometrage" value="{{ $vehicule->kilometrage }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="disponibilite" class="block text-sm font-medium leading-6 text-gray-900">Disponibilite</label>
                <input type="text" name="disponibilite" id="disponibilite" value="{{ $vehicule->disponibilite }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="tarif" class="block text-sm font-medium leading-6 text-gray-900">Tarif</label>
                <input type="text" name="tarif" id="tarif" value="{{ $vehicule->tarif }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="type_carburant" class="block text-sm font-medium leading-6 text-gray-900">Type carburant</label>
                <input type="text" name="type_carburant" id="type_carburant" value="{{ $vehicule->type_carburant }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                <input type="file" name="image" id="image" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="date_achat" class="block text-sm font-medium leading-6 text-gray-900">Date achat</label>
                <input type="date" name="date_achat" id="date_achat" value="{{ $vehicule->date_achat }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="sm:col-span-1">
                <label for="date_mise_en_service" class="block text-sm font-medium leading-6 text-gray-900">Date mise en service</label>
                <input type="date" name="date_mise_en_service" id="date_mise_en_service" value="{{ $vehicule->date_mise_en_service }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-600 focus:border-indigo-600 sm:text-sm">
            </div>

            <div class="flex justify-center sm:col-span-2">
                <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">Update</button>
            </div>
        </form>
    </div>
</div> --}}

@endsection
