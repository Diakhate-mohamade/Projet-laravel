@if (Auth::check() && Auth::user()->usertype != '0')
    @extends('layouts.app')
    @section('title', 'Home Vehicule List')
    @section('contents')
        <!-- Contenu commun pour les utilisateurs authentifiés -->
        {{-- <div>
            <h1 class="font-bold text-2xl ml-3">Home Product List</h1>
            <a href="{{ route('admin/vehicules/create') }}"
                class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                Product</a>
            <hr />
            @if (Session::has('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">#</th>
                        <th scope="col" class="px-6 py-3">Photo</th>
                        <th scope="col" class="px-6 py-3">Marque</th>
                        <th scope="col" class="px-6 py-3">Tarif</th>
                        <th scope="col" class="px-6 py-3">Annee</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($vehicule->count() > 0)
                        @foreach ($vehicule as $rs)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td>
                                    {{ $rs->photo }}
                                </td>
                                <td>
                                    {{ $rs->marque }}
                                </td>
                                <td>
                                    {{ $rs->tarif }}
                                </td>
                                <td>
                                    {{ $rs->annee }}
                                </td>
                                <td class="w-36">
                                    <div class="h-14 pt-5">
                                        <a href="{{ route('admin/vehicules/show', $rs->id) }}"
                                            class="text-blue-800">Detail</a>
                                        |
                                        <a href="{{ route('admin/vehicules/edit', $rs->id) }}"
                                            class="text-green-800 pl-2">Edit</a> |
                                        <form action="{{ route('admin/vehicules/destroy', $rs->id) }}" method="POST"
                                            onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                            @csrf
                                            @method('DELETE')
                                            <button>Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Product not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div> --}}
        <!-- Content Header (Page header) -->
        {{-- <div>
            <a href="{{ route('admin/vehicules/create') }}"
                class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                Product</a>
            <hr />
            @if (Session::has('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center justify-content-around">
                                <p class="mb-0">Sort By</p>
                                <select class="form-control w-75" id="sortBy">
                                    <option value="" {{ request()->sort == '' ? 'selected' : '' }}>Latest</option>
                                    <option value="asc" {{ request()->sort == 'asc' ? 'selected' : '' }}>Ascending
                                    </option>
                                    <option value="desc" {{ request()->sort == 'desc' ? 'selected' : '' }}>Descending
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        @if ($vehicule->count() > 0)
                            @foreach ($vehicule as $vehicule)
                                <div class="col-xl-3 col-sm- mb-4">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <img src="{{ asset('photo/'.$vehicule->image) }}" style="height:
                                            150px; width: 100%; object-fit: contain;">
                                        </div>
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="numbers">
                                                        <small class="d-flex align-items-center text-capitalize">
                                                            <i class="ri-store-2-fill me-1"></i>
                                                            <span>{{ $vehicule->matricule }}</span>
                                                        </small>
                                                        <p class="mb-0 text-capitalize font-weight-bold">
                                                            {{ $vehicule->matricule }}
                                                        </p>
                                                        <h5 class="font-weight-bolder mb-0">
                                                            ${{ number_format($vehicule->tarif, 0, '.', '.') }}
                                                        </h5>
                                                        <small>{{ $vehicule->description }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-end">
                                                    @if (!$vehicule->sold)
                                                        <a href="{{ route('admin/locations/create', $vehicule->id) }}"
                                                            class="btn bg-gradient-primary">Valider</a>
                                                    @else
                                                        <span class="btn bg-gradient-danger">Sold</span>
                                                    @endif
                                                </div>
                                                @if (Auth::check() && Auth::user()->usertype != '0')
                                                    <td class="w-36">
                                                        <div class="h-14 pt-5">
                                                            <a href="{{ route('admin/vehicules/show', $vehicule->id) }}"
                                                                class="text-blue-800">Detail</a>
                                                            <a href="{{ route('admin/vehicules/edit', $vehicule->id) }}"
                                                                class="text-green-800 pl-2">Edit</a> |
                                                            <form
                                                                action="{{ route('admin/vehicules/destroy', $vehicule->id) }}"
                                                                method="POST" onsubmit="return confirm('Delete?')"
                                                                class="float-right text-red-800">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button>Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                @endif
                                            </div>
                                        </div>
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

                <script>
                    const sortBy = document.getElementById('sortBy')
                    sortBy.addEventListener('change', function() {
                        const sort = 'sort=' + this.value + ''
                        let url = "{{ route('admin/home', ':sort') }}"
                        url = url.replace(':sort', sort)
                        window.location.href = url
                    })
                </script>
            </section>
        </div> --}}
        {{-- <div class="px-4 py-6 sm:px-0">
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
                    @if ($vehicule->count() > 0)
                        @foreach ($vehicule as $v)
                            <div class="bg-white shadow rounded p-4 relative">
                                <div class="absolute top-0 right-0 m-4">
                                    @if (!$v->sold)
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                                data-bs-toggle="modal" data-bs-target="#validationModal" data-id="{{ $v->id }}">
                                            Valider
                                        </button>
                                    @else
                                        <span class="bg-red-500 text-white font-bold py-2 px-4 rounded">Sold</span>
                                    @endif
                                </div>
                                <div class="flex justify-center mb-4">
                                    <img src="{{ asset('photo/' . $v->image) }}" alt="{{ $v->matricule }}"
                                        style="height: 150px; width: 100%; object-fit: contain;">
                                </div>
                                <h3 class="text-xl font-bold mb-2 text-center">{{ $v->matricule }}</h3>
                                <h4 class="text-lg font-bold mb-2 text-center">${{ number_format($v->tarif, 0, '.', '.') }}</h4>
                                <p class="text-gray-600 text-center">{{ $v->description }}</p>
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
                        <h5 class="modal-title" id="validationModalLabel">Validation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to validate?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="#" id="validateLink" class="btn btn-primary">Validate</a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const validationModal = document.getElementById('validationModal');
            validationModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const vehicleId = button.getAttribute('data-id');
                const validateLink = document.getElementById('validateLink');
                validateLink.href = "{{ route('admin/locations/create', ':vehicleId') }}".replace(':vehicleId', vehicleId);
            });
            const sortBy = document.getElementById('sortBy');
            sortBy.addEventListener('change', function() {
                const sort = 'sort=' + this.value + '';
                let url = "{{ route('admin/home', ':sort') }}";
                url = url.replace(':sort', sort);
                window.location.href = url;
            });
        </script> --}}
        {{-- <div class="px-4 py-6 sm:px-0">
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
                                    <img src="{{ asset('photo/' . $v->image) }}" alt="{{ $v->matricule }}"
                                        style="height: 150px; width: 100%; object-fit: contain;">
                                </div>
                                <h3 class="text-xl font-bold mb-2 text-center">{{ $v->matricule }}</h3>
                                <h4 class="text-lg font-bold mb-2 text-center">${{ number_format($v->tarif, 0, '.', '.') }}
                                </h4>
                                <p class="text-gray-600 text-center">{{ $v->description }}</p>
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
        </div> --}}
        {{-- <div class="px-4 py-6 sm:px-0">
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
                                    <img src="{{ asset('photo/' . $v->image) }}" alt="{{ $v->matricule }}"
                                        style="height: 150px; width: 100%; object-fit: contain;">
                                </div>
                                <h3 class="text-xl font-bold mb-2 text-center">{{ $v->matricule }}</h3>
                                <h4 class="text-lg font-bold mb-2 text-center">${{ number_format($v->tarif, 0, '.', '.') }}
                                </h4>
                                <p class="text-gray-600 text-center">{{ $v->description }}</p>
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
        </div> --}}
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-gray-200 rounded-lg p-4">
                <h1 class="text-3xl font-bold text-center mb-8">Vehicles
                     <a href="{{ route('admin/vehicules/create') }}"
                    class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                    Vehicule</a>
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
                                    <img src="{{ asset('photo/' . $v->image) }}" alt="{{ $v->matricule }}"
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
        <div class="modal fade" id="validationModal" tabindex="-1" aria-labelledby="validationModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="validationModalLabel">Reserver une location</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin/locations/store') }}" method="POST">
                        <div class="modal-body">
                            {{-- <p>Are you sure you want to validate?</p> --}}
                            {{-- <form action="{{ route('admin/locations/store') }}" method="POST"> --}}
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="user_id">User ID</label>
                                    <select class="form-control" id="user_id" name="user_id" required>
                                        <option value="">Sélectionnez un utilisateur</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
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
                                    <input type="time" class="form-control" id="heure_debut" name="heure_debut"
                                        required>
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
                                    <select class="form-control" id="chauffeur_id" name="chauffeur_id" required>
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
                                    {{-- <div class="col-md-6 mb-3">
                                        <label for="vehicule_id">Véhicule ID</label>
                                        <select class="form-control" id="vehicule_id" name="vehicule_id" required>
                                            <option value="">Sélectionnez un véhicule</option>
                                            @foreach ($vehicule as $vehicule)
                                                <option value="{{ $vehicule->id }}">{{ $vehicule->marque }} - {{ $vehicule->matricule }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="col-md-6 mb-3">
                                        <label for="vehicule_id">Véhicule ID</label>
                                        <input type="text" class="form-control" id="vehicule_id" name="vehicule_id"
                                            required disabled>
                                        <input type="hidden" id="selectedVehicleId" name="selectedVehicleId">
                                    </div>

                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="remarques">Remarques</label>
                                    <textarea class="form-control" id="remarques" name="remarques" rows="3"></textarea>
                                </div>
                            </div>

                            {{-- <button class="btn btn-primary" type="submit">Envoyer</button> --}}

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script>
            const form = document.getElementById('validationModal').querySelector('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Empêcher le comportement par défaut du formulaire

                // Vous pouvez ajouter ici d'autres vérifications avant de soumettre le formulaire

                // Soumettre le formulaire
                this.submit();
            });
        </script>
        <script>
            const validationModal = document.getElementById('validationModal');
            validationModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const vehicleId = button.getAttribute('data-id');

                // Remplir le champ vehicule_id avec l'ID du véhicule sélectionné
                document.getElementById('vehicule_id').value = vehicleId;

                // Mettre à jour le champ input hidden pour stocker l'ID du véhicule sélectionné
                document.getElementById('selectedVehicleId').value = vehicleId;
            });

            // Désactiver le champ vehicule_id pour qu'il ne soit pas modifiable
            document.getElementById('vehicule_id').setAttribute('disabled', 'disabled');
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
        {{-- <script>
            const validationModal = document.getElementById('validationModal');
            validationModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const vehicleId = button.getAttribute('data-id');

                // Remplir le champ vehicule_id avec l'ID du véhicule sélectionné
                document.getElementById('vehicule_id').value = vehicleId;

                // Mettre à jour le champ input hidden pour stocker l'ID du véhicule sélectionné
                document.getElementById('selectedVehicleId').value = vehicleId;
            });

            // Désactiver le champ vehicule_id pour qu'il ne soit pas modifiable
            document.getElementById('vehicule_id').setAttribute('disabled', 'disabled');
        </script>
        <script>
            const sortBy = document.getElementById('sortBy');
            sortBy.addEventListener('change', function() {
                const sort = 'sort=' + this.value + '';
                let url = "{{ route('admin/home', ':sort') }}";
                url = url.replace(':sort', sort);
                window.location.href = url;
            });
        </script> --}}
        <!-- /.content -->
    @endsection
@else
    {{-- @extends('layouts.user')
    @section('title', 'Home Vehicule List')
    @section('content')
        <!-- Contenu commun pour les utilisateurs invités -->
        <div>
            <h1 class="font-bold text-2xl ml-3">Home Product List</h1>
            <a href="{{ route('admin/vehicules/create') }}"
                class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
                Product</a>
            <hr />
            @if (Session::has('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">#</th>
                        <th scope="col" class="px-6 py-3">Photo</th>
                        <th scope="col" class="px-6 py-3">Marque</th>
                        <th scope="col" class="px-6 py-3">Tarif</th>
                        <th scope="col" class="px-6 py-3">Annee</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($vehicule->count() > 0)
                        @foreach ($vehicule as $rs)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td>
                                    {{ $rs->photo }}
                                </td>
                                <td>
                                    {{ $rs->marque }}
                                </td>
                                <td>
                                    {{ $rs->tarif }}
                                </td>
                                <td>
                                    {{ $rs->annee }}
                                </td>
                                <td class="w-36">
                                    <div class="h-14 pt-5">
                                        <a href="{{ route('admin/vehicules/show', $rs->id) }}"
                                            class="text-blue-800">Detail</a>
                                        |
                                        <a href="{{ route('admin/vehicules/edit', $rs->id) }}"
                                            class="text-green-800 pl-2">Edit</a> |
                                        <form action="{{ route('admin/vehicules/destroy', $rs->id) }}" method="POST"
                                            onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                            @csrf
                                            @method('DELETE')
                                            <button>Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Product not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    @endsection --}}
@endif
