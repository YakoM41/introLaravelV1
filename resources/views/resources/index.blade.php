<h1>Liste des Ressources</h1>

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('resources.create') }}">Créer une nouvelle ressource</a>

<ul style="margin-top: 20px;">
    @foreach ($resources as $resource)
        <li style="margin-bottom: 10px; display: flex; align-items: center;">
            <span>{{ $resource->name }}</span>
            <a href="{{ route('resources.edit', $resource->id) }}" style="margin-left: 15px;">Modifier</a>
            <form action="{{ route('resources.destroy', $resource->id) }}" method="POST" style="margin-left: 15px;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette ressource ?')">Supprimer</button>
            </form>
        </li>
    @endforeach
</ul>
