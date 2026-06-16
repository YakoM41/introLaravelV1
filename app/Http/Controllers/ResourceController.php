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
        // Logique pour enregistrer une nouvelle ressource
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
        // Logique pour afficher le formulaire d'édition
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Logique pour mettre à jour une ressource
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Logique pour supprimer une ressource
    }
}
