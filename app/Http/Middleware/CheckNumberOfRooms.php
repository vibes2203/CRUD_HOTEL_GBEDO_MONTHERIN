<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Hotel;

class CheckNumberOfRooms
{
    public function handle($request, Closure $next)
    {
        $roomId = $request->route('id'); // Assurez-vous d'avoir une route avec le paramètre 'id' pour l'ID de la chambre.

        // Vérifiez le nombre total de chambres
        $numberOfRooms = Hotel::count();

        // Vérifiez si la suppression de la chambre est autorisée
        if ($numberOfRooms >= 3) {
            return $next($request);
        }

        // Redirigez l'utilisateur vers la page de création si le nombre de chambres est inférieur à 3
        return redirect()->route('hotels.create')->with('error', 'Vous devez avoir au moins 3 chambres avant de pouvoir supprimer une chambre.');
    }
}
