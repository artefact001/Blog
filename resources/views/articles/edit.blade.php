<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'article {{ $article->name }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-warning text-dark">
                <h1 class="card-title">Modifier l'article "{{ $article->name }}"</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $article->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description :</label>
                        <textarea class="form-control" id="description" name="description" required>{{ $article->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="creation_date">Date de création :</label>
                        <input type="date" class="form-control" id="creation_date" name="creation_date" value="{{ $article->creation_date }}" required>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="featured" name="featured" {{ $article->featured ? 'checked' : '' }}>
                        <label class="form-check-label" for="featured">À la une</label>
                    </div>

                    <div class="form-group">
                        <label for="image">Image :</label>
                        @if ($article->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $article->image) }}" class="img-thumbnail" alt="{{ $article->name }}" style="max-width: 200px;">
                            </div>
                        @else
                            <p>Pas d'image</p>
                        @endif
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
