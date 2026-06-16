<h1>Détail de la Ressource</h1>

<p><strong>ID :</strong> {{ $resource->id }}</p>
<p><strong>Nom :</strong> {{ $resource->name }}</p>
<p><strong>Créé le :</strong> {{ $resource->created_at->format('d/m/Y H:i') }}</p>
<p><strong>Mis à jour le :</strong> {{ $resource->updated_at->format('d/m/Y H:i') }}</p>

<a href="{{ route('resources.index') }}">Retour à la liste</a>
