@extends('layouts.app')

@section('title', 'Create Hotel')

@section('contents')
    <div class="container mt-5 p-4 border rounded" style="background-color: #f8f9fa;">
        <h1 class="mb-4 text-center" style="color: #343a40;">Ajouter un Hôtel</h1>
        <hr style="border-color: #6c757d;" />

        <form action="{{ route('hotels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="nom" class="form-label" style="color: #495057;">Nom</label>
                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
            </div>

            <div class="mb-3">
                <label for="prix" class="form-label" style="color: #495057;">Prix</label>
                <input type="text" name="prix" class="form-control" placeholder="Prix" required>
            </div>

            <div class="mb-3">
                <label for="nom_chambre" class="form-label" style="color: #495057;">Nom de la chambre</label>
                <input type="text" name="nom_chambre" class="form-control" placeholder="Nom de la chambre" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label" style="color: #495057;">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="max_adultes" class="form-label" style="color: #495057;">Max d'adultes</label>
                <input type="text" name="max_adultes" class="form-control" placeholder="Max d'adultes" required>
            </div>

            <div class="mb-3">
                <label for="enfants_max" class="form-label" style="color: #495057;">Enfants maximum autorisé</label>
                <input type="text" name="enfants_max" class="form-control" placeholder="Enfants maximum autorisé" required>
            </div>

            <div class="mb-3">
                <label for="attributs" class="form-label" style="color: #495057;">Attributs</label>
                <input type="text" name="attributs" class="form-control" placeholder="Attributs" required>
            </div>

            <div class="mb-3">
                <label for="nombre_de_lits" class="form-label" style="color: #495057;">Nombre de lits</label>
                <input type="text" name="nombre_de_lits" class="form-control" placeholder="Nombre de lits" required>
            </div>

            <div class="mb-3">
                <label for="statut" class="form-label" style="color: #495057;">Statut</label>
                <select name="statut" class="form-select" aria-label="Statut" required>
                    <option value="Disponible">Disponible</option>
                    <option value="Non disponible">Non disponible</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" style="background-color: #007bff; border-color: #007bff;">Submit</button>
            </div>
        </form>
    </div>
@endsection
