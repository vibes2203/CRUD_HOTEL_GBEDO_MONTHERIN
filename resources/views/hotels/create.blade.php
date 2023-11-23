@extends('layouts.app')

@section('title', 'Create Hotel')

@section('contents')
    <div class="container">
        <h1 class="mb-4">Add Hotel</h1>
        <hr />

        <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" style="width: 10cm;" required>
                </div>

                <div class="col-md-6">
                    <label for="prix" class="form-label">Prix</label>
                    <input type="text" name="prix" class="form-control" placeholder="Prix" style="width: 10cm;" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nom_chambre" class="form-label">Nom de la chambre</label>
                    <input type="text" name="nom_chambre" class="form-control" placeholder="Nom de la chambre" style="width: 10cm;" required>
                </div>

                <div class="col-md-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" placeholder="Description" style="width: 10cm;" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="max_adultes" class="form-label">Max d'adultes</label>
                    <input type="text" name="max_adultes" class="form-control" placeholder="Max d'adultes" style="width: 10cm;" required>
                </div>

                <div class="col-md-6">
                    <label for="enfants_max" class="form-label">Enfants maximum autorisé</label>
                    <input type="text" name="enfants_max" class="form-control" placeholder="Enfants maximum autorisé" style="width: 10cm;" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="attributs" class="form-label">Attributs</label>
                    <input type="text" name="attributs" class="form-control" placeholder="Attributs" style="width: 10cm;" required>
                </div>

                <div class="col-md-6">
                    <label for="nombre_de_lits" class="form-label">Nombre de lits</label>
                    <input type="text" name="nombre_de_lits" class="form-control" placeholder="Nombre de lits" style="width: 10cm;" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="statut" class="form-label">Statut</label>
                    <select name="statut" class="form-select" aria-label="Statut" style="width: 10cm;" required>
                        <option value="Disponible">Disponible</option>
                        <option value="Non disponible">Non disponible</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
