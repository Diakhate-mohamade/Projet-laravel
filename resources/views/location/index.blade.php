@extends('layouts.app')

@section('title', 'Home Product List')

@section('contents')
    {{-- <div class="row p-4 pt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-gradient-primary d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x"></i> Liste des Location</h3>
                <div class="card-tools d-flex align-items-center ">
                    @if (Auth::check() && Auth::user()->usertype != '0')
                    <a class="btn btn-link text-white mr-4 d-block" href="{{ route('admin/locations/create') }}"><i
                            class="fas fa-user-plus"></i> Nouvel chauffeur</a>
                            @endif
                    <div class="input-group input-group-md" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card-header -->
            <div class="card-body table-responsive p-0 table-striped" style="height: 500px;">
                <table class="table table-head-fixed">
                    <thead>
                        <tr>
                            <th style="width:5%;"></th>
                            <th style="width:20%;">nom user</th>
                            <th style="width:20%;">marque</th>
                            <th style="width:20%;">Telephone</th>
                            <th style="width:20%;">Lieu de depart</th>
                            <th style="width:20%;">Lieu d arrivee</th>
                            <th style="width:20%;">date</th>
                            <th style="width:20%;">Ajoute</th>
                            <th style="width:30%;" class="text-center">
                                @if (Auth::check() && Auth::user()->usertype != '0')
                                Action
                                @endif
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($location->count() > 0)
                        @foreach ($location as $rs)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td>
                                {{ $rs->user->prenom }}
                                {{ $rs->user->name }}
                            </td>
                            <td>
                                {{ $rs->vehicule->description}}

                            </td>
                            <td>
                                {{ $rs->numero_telephone}}
                            </td>
                            <td>
                                {{ $rs->lieu_depart}}
                            </td>
                            <td>
                                {{ $rs->lieu_arrivee }}
                            </td>
                            <td>
                                {{ $rs->date}}
                            </td>
                            <td class="text-center"><span class="tag tag-success">{{ $rs->diffForHumans()
                               }}</span>
                            </td>
                            <td class="w-32">
                                <div class="h-10 pt-1">
                                    <a href="{{ route('admin/locations/show', $rs->id) }}" class="text-blue-800">Detail</a> |
                                    <a href="{{ route('admin/locations/edit', $rs->id)}}" class="text-green-800 pl-2">Edit</a> |
                                    <form action="{{ route('admin/locations/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
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
                            <td class="text-center" colspan="5">Vehicule not found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div> --}}

    {{-- <div class="row p-4 pt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-gradient-primary d-flex align-items-center justify-content-between">
                <h3 class="card-title"><i class="fas fa-users fa-2x"></i> Liste des Locations</h3>
                <div class="card-tools d-flex">
                    @if (Auth::check() && Auth::user()->usertype != '0')
                    <a class="btn btn-primary ml-auto" href="{{ route('admin/locations/create') }}"><i
                            class="fas fa-plus-circle"></i> Nouvelle location</a>
                    @endif
                    <div class="input-group input-group-md ml-3" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                            <th style="width:25%;" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($location->count() > 0)
                        @foreach ($location as $rs)
                        <tr class="bg-white">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rs->user->prenom }} {{ $rs->user->name }}</td>
                            <td>{{ $rs->vehicule->description }}</td>
                            <td>{{ $rs->numero_telephone }}</td>
                            <td>{{ $rs->lieu_depart }}</td>
                            <td>{{ $rs->lieu_arrivee }}</td>
                            <td>{{ $rs->date }}</td>
                            <td><span class="badge badge-success">{{ $rs->diffForHumans() }}</span></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('admin/locations/show', $rs->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin/locations/edit', $rs->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('admin/locations/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
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
    {{ $locations->links() }}
</div> --}}

    <div class="row p-4 pt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-gradient-primary d-flex align-items-center justify-content-between">
                    <h3 class="card-title"><i class="fas fa-users fa-2x"></i> Liste des Locations</h3>
                    <div class="card-tools d-flex">
                        @if (Auth::check() && Auth::user()->usertype != '0')
                            <a class="btn btn-primary ml-auto" href="{{ route('admin/locations/create') }}"><i
                                    class="fas fa-plus-circle"></i> Nouvelle location</a>
                        @endif
                        <div class="input-group input-group-md ml-3" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                                <th style="width:25%;" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($locations->count() > 0)
                                @foreach ($locations as $rs)
                                    <tr class="bg-white">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $rs->user->prenom }} {{ $rs->user->name }}</td>
                                        <td>{{ $rs->vehicule->description }}</td>
                                        <td>{{ $rs->numero_telephone }}</td>
                                        <td>{{ $rs->lieu_depart }}</td>
                                        <td>{{ $rs->lieu_arrivee }}</td>
                                        <td>{{ $rs->date }}</td>
                                        <td><span class="badge badge-success">{{ $rs->diffForHumans() }}</span></td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('admin/locations/show', $rs->id) }}"
                                                    class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('admin/locations/edit', $rs->id) }}"
                                                    class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('admin/locations/destroy', $rs->id) }}"
                                                    method="POST" onsubmit="return confirm('Delete?')"
                                                    style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
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
                {{ $locations->links() }}
            </div>
        </div>
    </div>

    {{-- <!-- Pagination -->
<div class="row">
    <div class="col-12">
        {{ $locations->links() }}
    </div>
</div> --}}


@endsection
