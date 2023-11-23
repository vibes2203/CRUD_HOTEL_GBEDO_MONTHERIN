@extends('layouts.app')

@section('title', 'Show Hotel')

@section('contents')
    <h1 class="mb-0">Detail Hotel</h1>
    <hr />

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ optional($hotel)->nom }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="prix" class="form-control" placeholder="Prix" value="{{ optional($hotel)->prix }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nom de la chambre</label>
            <input type="text" name="nom_chambre" class="form-control" placeholder="Nom de la chambre" value="{{ optional($hotel)->nom_chambre }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Description" readonly>{{ optional($hotel)->description }}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Max d'adultes</label>
            <input type="text" name="max_adultes" class="form-control" placeholder="Max d'adultes" value="{{ optional($hotel)->max_adultes }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Enfants maximum autorisé</label>
            <input type="text" name="enfants_max" class="form-control" placeholder="Enfants maximum autorisé" value="{{ optional($hotel)->enfants_max }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Attributs</label>
            <input type="text" name="attributs" class="form-control" placeholder="Attributs" value="{{ optional($hotel)->attributs }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Statut</label>
            <input type="text" name="statut" class="form-control" placeholder="Statut" value="{{ optional($hotel)->statut }}" readonly>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ optional($hotel)->created_at ? optional($hotel)->created_at->format('Y-m-d H:i:s') : '' }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ optional($hotel)->updated_at ? optional($hotel)->updated_at->format('Y-m-d H:i:s') : '' }}" readonly>
        </div>
    </div>
@endsection
