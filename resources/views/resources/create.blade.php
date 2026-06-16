<h1>Créer une Ressource</h1>

<form action="{{ route('resources.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name">
    </div>
    <button type="submit">Enregistrer</button>
</form>
