@extends('layouts.user')

@section('title', 'Home')

@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Reservation
            </h1>
        </div>
    </header>
    <hr />
    <main>
        <div class="row p-4 pt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-gradient-primary d-flex align-items-center justify-content-between">
                        <h3 class="card-title"><i class="fas fa-users fa-2x"></i> Liste des Locations</h3>
                        <div class="card-tools d-flex">
                            {{-- @if (Auth::check() && Auth::user()->usertype != '0') --}}
                            @if (Route::has('admin'))
                                @auth
                                    <a class="btn btn-primary ml-auto" href="{{ route('admin/locations/create') }}"><i
                                            class="fas fa-plus-circle"></i> Nouvelle location</a>
                                @endauth
                            @endif
                            <div class="input-group input-group-md ml-3" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th style="width:5%;">#</th>
                                    <th style="width:20%;">Nom utilisateur</th>
                                    <th style="width:20%;">Marque</th>
                                    <th style="width:15%;">Téléphone</th>
                                    <th style="width:15%;">Départ</th>
                                    <th style="width:15%;">Arrivée</th>
                                    <th style="width:15%;">Date</th>
                                    <th style="width:20%;">Ajouté</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if ($locations->count() > 0)
                                    {{-- @if (auth()->check() && $locations->user_id == auth()->user()->id) --}}
                                    @foreach ($locations as $rs)
                                        @if (auth()->check() && $rs->user_id == auth()->user()->id)
                                            <tr class="bg-white">
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $rs->user->prenom }} {{ $rs->user->name }}</td>
                                                <td>{{ $rs->vehicule->description }}</td>
                                                <td>{{ $rs->numero_telephone }}</td>
                                                <td>{{ $rs->lieu_depart }}</td>
                                                <td>{{ $rs->lieu_arrivee }}</td>
                                                <td>{{ $rs->date }}</td>
                                                <td><span class="badge badge-success">{{ $rs->diffForHumans() }}</span></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="9">Aucune location trouvée</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-12">
                    {{-- {{ $locations->links() }} --}}
                </div>
            </div>
        </div>
    </main>
@endsection
