@extends('layouts.app')

@section('title', 'Edit Hotel')

@section('contents')
    <h1 class="mb-0">Edit Hotel</h1>
    <hr />
    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ $hotel->nom }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Prix</label>
                <input type="text" name="prix" class="form-control" placeholder="Prix" value="{{ $hotel->prix }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nom de la chambre</label>
                <input type="text" name="nom_chambre" class="form-control" placeholder="Nom de la chambre" value="{{ $hotel->nom_chambre }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description">{{ $hotel->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Max d'adultes</label>
                <input type="text" name="max_adultes" class="form-control" placeholder="Max d'adultes" value="{{ $hotel->max_adultes }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Enfants maximum autorisé</label>
                <input type="text" name="enfants_max" class="form-control" placeholder="Enfants maximum autorisé" value="{{ $hotel->enfants_max }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Attributs</label>
                <input type="text" name="attributs" class="form-control" placeholder="Attributs" value="{{ $hotel->attributs }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Statut</label>
                <select name="statut" class="form-select" aria-label="Statut">
                    <option value="Disponible" {{ $hotel->statut == 'Disponible' ? 'selected' : '' }}>Disponible</option>
                    <option value="Non disponible" {{ $hotel->statut == 'Non disponible' ? 'selected' : '' }}>Non disponible</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
