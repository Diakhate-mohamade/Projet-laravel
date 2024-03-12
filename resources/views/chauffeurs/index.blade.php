@extends('layouts.app')

@section('title', 'Home Product List')

@section('contents')
<div class="row p-4 pt-5">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-gradient-primary d-flex align-items-center justify-content-between">
                <h3 class="card-title"><i class="fas fa-users fa-2x"></i> Liste des Chauffeurs</h3>
                <div class="card-tools d-flex">
                    @if (Auth::check() && Auth::user()->usertype != '0')
                        <a class="btn btn-primary ml-auto" href="{{ route('admin/chauffeurs/create') }}"><i
                                class="fas fa-plus-circle"></i> Nouvel chauffeur</a>
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
                            <th style="width:20%;">Photo</th>
                            <th style="width:20%;">Prénom</th>
                            <th style="width:20%;">Nom</th>
                            <th style="width:20%;">Téléphone</th>
                            <th style="width:20%;">Statut</th>
                            <th style="width:20%;">Ajouté</th>
                            <th style="width:25%;" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($chauffeur->count() > 0)
                            @foreach ($chauffeur as $rs)
                                <tr class="bg-white">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('Chauffeur/' . $rs->photo) }}" class="rounded-circle"
                                            width="50" height="50" />
                                    </td>
                                    <td>{{ $rs->prenom }}</td>
                                    <td>{{ $rs->nom }}</td>
                                    <td>{{ $rs->numero_chauffeur }}</td>
                                    <td>{{ $rs->statut }}</td>
                                    <td><span class="badge badge-success">{{ $rs->diffForHumans() }}</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('admin/chauffeurs/show', $rs->id) }}"
                                                class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('admin/chauffeurs/edit', $rs->id) }}"
                                                class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('admin/chauffeurs/destroy', $rs->id) }}"
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
                                <td class="text-center" colspan="8">Aucun chauffeur trouvé</td>
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
            {{ $chauffeur->links() }}
        </div>
    </div>
</div>

@endsection
