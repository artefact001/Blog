<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page Simple et Attractive</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .banner {
            background-image: url('https://img.freepik.com/vecteurs-libre/fond-tropical-colore-degrade_52683-130268.jpg?t=st=1720994104~exp=1720994704~hmac=5acc669c2ab0fd93f0f5351cb0568d5dc8ebf864684133d4372c437003e46814.webp'); /* Utilisez une image de haute qualité */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 100px 0;
            text-align: center;
            height: 500px;
            width: 100%;
            /* color: #FFF; Couleur de texte */
        }
        .card-columns {
            column-count: 3;
        }
    </style>
</head>
<body>
    <!-- Banner -->
    <div class="banner">
        <div class="container">
            <h1>Bienvenue sur notre site</h1>
            <p>Découvrez nos derniers articles et actualités</p>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Makhtoum_Article</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->routeIs('articles.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('articles.index') }}">Accueil</a>
                </li>
                <li class="nav-item {{ request()->routeIs('articles.create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('articles.create') }}">Articles</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Cards Section -->
    <div class="container mt-5">
        <h2 class="mb-4">Nos Articles</h2>
        <div class="card-columns">
            @foreach($articles as $article)
                <div class="card">
                    <img src="{{ $article->image ? asset('storage/' . $article->image) : 'data:image/png;base64,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' }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->name }}</h5>
                        <p class="card-text">{{ $article->description }}</p>
                        <p class="card-text"><small class="text-muted">{{ $article->creation_date }}</small></p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Vos Articles By Almakhtoum
        </div>
    </footer>

    <!-- Inclure le JavaScript de Bootstrap et FontAwesome -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
