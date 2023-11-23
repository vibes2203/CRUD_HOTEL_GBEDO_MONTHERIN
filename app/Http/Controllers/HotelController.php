<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels= Hotel::orderBy('created_at', 'DESC')->get();

        return view('hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'prix' => 'required|numeric',
        'nom_chambre' => 'required',
        'description' => 'required',
        'max_adultes' => 'required|numeric',
        'enfants_max' => 'required|numeric',
        'attributs' => 'required',
        'statut' => 'required|in:Disponible,Non disponible',
        'nombre_de_lits' => 'required|numeric',
    ]);

    Hotel::create($request->all());

    return redirect()->route('hotels.index')->with('success', 'Hotel added successfully');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hotel = Hotel::findOrFail($id);

        return view('hotels.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hotel = Hotel::findOrFail($id);

        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hotel = Hotel::findOrFail($id);

        $hotel->update($request->all());

        return redirect()->route('hotels.index')->with('success', 'Hotel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hotel = Hotel::findOrFail($id);

        $hotel->delete();

        return redirect()->route('hotels.index')->with('success', 'Hotel deleted successfully');
    }
}
