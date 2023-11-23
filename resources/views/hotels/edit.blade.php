@extends('layouts.app')

@section('title', 'Edit Hotel')

@section('contents')
    <div class="container mt-5 p-4 border rounded" style="background-color: #f8f9fa;">
        <h1 class="mb-4 text-center" style="color: #343a40;">Modifier l'Hôtel</h1>
        <hr style="border-color: #6c757d;" />

        <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" style="color: #495057;">Nom</label>
                <div class="col-sm-8">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ $hotel->nom }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" style="color: #495057;">Prix</label>
                <div class="col-sm-8">
                    <input type="text" name="prix" class="form-control" placeholder="Prix" value="{{ $hotel->prix }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" style="color: #495057;">Nom de la chambre</label>
                <div class="col-sm-8">
                    <input type="text" name="nom_chambre" class="form-control" placeholder="Nom de la chambre" value="{{ $hotel->nom_chambre }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" style="color: #495057;">Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="description" placeholder="Description">{{ $hotel->description }}</textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" style="color: #495057;">Max d'adultes</label>
                <div class="col-sm-8">
                    <input type="text" name="max_adultes" class="form-control" placeholder="Max d'adultes" value="{{ $hotel->max_adultes }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" style="color: #495057;">Enfants maximum autorisé</label>
                <div class="col-sm-8">
                    <input type="text" name="enfants_max" class="form-control" placeholder="Enfants maximum autorisé" value="{{ $hotel->enfants_max }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" style="color: #495057;">Attributs</label>
                <div class="col-sm-8">
                    <input type="text" name="attributs" class="form-control" placeholder="Attributs" value="{{ $hotel->attributs }}">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label" style="color: green;">Statut</label>
                <div class="col-sm-8">
                    <select name="statut" class="form-select" aria-label="Statut">
                        <option value="Disponible" {{ $hotel->statut == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                        <option value="Non disponible" {{ $hotel->statut == 'Non disponible' ? 'selected' : '' }}>Non disponible</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="d-grid">
                    <button class="btn btn-warning" style="background-color: #ffc107; border-color: #;">Mettre à jour</button>
                </div>
            </div>
        </form>
    </div>
@endsection
