<h1>Modifier la Ressource</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('resources.update', $resource->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="{{ old('name', $resource->name) }}">
    </div>
    <button type="submit">Mettre à jour</button>
</form>
