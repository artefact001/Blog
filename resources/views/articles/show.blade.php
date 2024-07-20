<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'article</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="card-title">Détails de l'article "{{ $article->name }}"</h1>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Description :</strong> {{ $article->description }}</p>
                <p class="card-text"><strong>Date de création :</strong> {{ $article->creation_date }}</p>
                <p class="card-text"><strong>À la une :</strong> {{ $article->featured ? 'Oui' : 'Non' }}</p>
                @if ($article->image)
                    <div class="text-center mb-3">
                        <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid" alt="{{ $article->name }}" style="max-width: 200px;">
                    </div>
                @else
                    <p class="card-text">Pas d'image pour cet article.</p>
                @endif
                <div class="d-flex justify-content-between">
                    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Retour à la liste des articles</a>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Modifier cet article</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="ml-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer cet article</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
