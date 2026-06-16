<h1>Créer une Ressource</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('resources.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
    </div>
    <button type="submit">Enregistrer</button>
</form>
