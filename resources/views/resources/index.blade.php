<h1>Liste des Ressources</h1>

@if (session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

{{-- Ici, on bouclera sur les ressources pour les afficher --}}
<ul>
    @foreach ($resources as $resource)
        <li>{{ $resource['name'] }}</li>
    @endforeach
</ul>
