@extends('layouts.app')

@if(Auth::check())
    @section('title', 'Home Hotel')

    @section('contents')
        <div class="container border border-3 p-4 mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="mb-0">Liste des Hôtels</h1>
            </div>
            <hr class="my-4" />

            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif

            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Nom de la chambre</th>
                        <th>Description</th>
                        <th>Max d'adultes</th>
                        <th>Enfants maximum autorisé</th>
                        <th>Attributs</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if($hotels->count() > 0)
                        @foreach($hotels as $hotel)
                            <tr>
                                <td class="align-middle">{{ $loop->iteration }}</td>
                                <td class="align-middle">{{ $hotel->nom }}</td>
                                <td class="align-middle">{{ $hotel->prix }}</td>
                                <td class="align-middle">{{ $hotel->nom_chambre }}</td>
                                <td class="align-middle">{{ $hotel->description }}</td>
                                <td class="align-middle">{{ $hotel->max_adultes }}</td>
                                <td class="align-middle">{{ $hotel->enfants_max }}</td>
                                <td class="align-middle">{{ $hotel->attributs }}</td>
                                <td class="align-middle">{{ $hotel->statut }}</td>
                                <td class="align-middle">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ route('hotels.show', $hotel->id) }}" class="btn btn-secondary">Détail</a>
                                        <a href="{{ route('hotels.edit', $hotel->id)}}" class="btn btn-warning">Modifier</a>
                                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" onsubmit="return confirm('Supprimer ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="10">Aucun hôtel trouvé</td>
                        </tr>
                    @endif
                </tbody>
            </table>

            <div class="text-center mt-4">
                <a href="{{ route('hotels.create') }}" class="btn btn-success">Ajouter un Hôtel</a>
            </div>
        </div>
    @endsection
@else
    <p class="mt-5">Vous devez être connecté pour accéder à la liste des hôtels.</p>
@endif
