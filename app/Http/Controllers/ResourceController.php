<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // À remplacer par la logique pour récupérer les données depuis le modèle
        $resources = [
            ['id' => 1, 'name' => 'Ressource 1'],
            ['id' => 2, 'name' => 'Ressource 2'],
            ['id' => 3, 'name' => 'Ressource 3'],
        ];

        return view('resources.index', ['resources' => $resources]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);

        // Logique pour enregistrer la nouvelle ressource en base de données
        // Pour l'instant, nous ne faisons rien avec $validated['name']

        return redirect()->route('resources.index')->with('success', 'Ressource créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Logique pour afficher une ressource spécifique
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Simule la récupération d'une ressource. À remplacer par une requête au modèle.
        $resource = ['id' => $id, 'name' => 'Ressource ' . $id];

        return view('resources.edit', ['resource' => $resource]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);

        // Logique pour mettre à jour la ressource en base de données
        // Pour l'instant, nous ne faisons rien avec $validated['name']

        return redirect()->route('resources.index')->with('success', 'Ressource mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Logique pour supprimer une ressource
    }
}
