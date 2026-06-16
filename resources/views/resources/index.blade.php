<h1>Liste des Ressources</h1>

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('resources.create') }}">Créer une nouvelle ressource</a>

<ul style="margin-top: 20px;">
    @foreach ($resources as $resource)
        <li style="margin-bottom: 10px;">
            {{ $resource['name'] }}
            <a href="{{ route('resources.edit', $resource['id']) }}" style="margin-left: 15px;">Modifier</a>
        </li>
    @endforeach
</ul>
