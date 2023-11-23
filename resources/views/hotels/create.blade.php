@extends('layouts.app')

@section('title', 'Create Hotel')

@section('contents')
    <div class="container mt-5 p-4 border rounded" style="background-color: #f8f9fa;">
        <h1 class="mb-4 text-center" style="color: #343a40;">Ajouter un Hôtel</h1>
        <hr style="border-color: #6c757d;" />

        <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3 row">
                <label for="nom" class="col-sm-4 col-form-label" style="color: #495057;">Nom</label>
                <div class="col-sm-8">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="prix" class="col-sm-4 col-form-label" style="color: #495057;">Prix</label>
                <div class="col-sm-8">
                    <input type="text" name="prix" class="form-control" placeholder="Prix" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nom_chambre" class="col-sm-4 col-form-label" style="color: #495057;">Nom de la chambre</label>
                <div class="col-sm-8">
                    <input type="text" name="nom_chambre" class="form-control" placeholder="Nom de la chambre" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="description" class="col-sm-4 col-form-label" style="color: #495057;">Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="description" placeholder="Description" required></textarea>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="max_adultes" class="col-sm-4 col-form-label" style="color: #495057;">Max d'adultes</label>
                <div class="col-sm-8">
                    <input type="text" name="max_adultes" class="form-control" placeholder="Max d'adultes" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="enfants_max" class="col-sm-4 col-form-label" style="color: #495057;">Enfants maximum autorisé</label>
                <div class="col-sm-8">
                    <input type="text" name="enfants_max" class="form-control" placeholder="Enfants maximum autorisé" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="attributs" class="col-sm-4 col-form-label" style="color: #495057;">Attributs</label>
                <div class="col-sm-8">
                    <input type="text" name="attributs" class="form-control" placeholder="Attributs" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre_de_lits" class="col-sm-4 col-form-label" style="color: #495057;">Nombre de lits</label>
                <div class="col-sm-8">
                    <input type="text" name="nombre_de_lits" class="form-control" placeholder="Nombre de lits" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="statut" class="col-sm-4 col-form-label" style="color: #495057;">Statut</label>
                <div class="col-sm-8">
                    <select name="statut" class="form-select" aria-label="Statut" required>
                        <option value="Disponible">Disponible</option>
                        <option value="Non disponible">Non disponible</option>
                    </select>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;">Ajouter un Hôtel</button>
            </div>
        </form>
    </div>
@endsection
