<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Page Simple et Attractive</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .banner {
      background-image: url('{{ asset('https://fr.freepik.com/vecteurs-libre/banniere-horizontale-opportunite-commerciale-design-plat_32946677.htm#fromView=search&page=1&position=9&uuid=45d140cb-1201-484b-a3fe-664154e959e8') }}'); /* Utilisation de asset() pour l'image de fond */
      background-size: cover;
      background-position: center;
      /* color: white; */
      padding: 100px 0;
      text-align: center;
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
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="route('index')">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="route('articles')">Articles</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Cards Section -->
  <div class="container mt-5">
    <h2 class="mb-4">Nos Articles</h2>
    <div class="card-columns">
      <!-- Ici seront affichés dynamiquement vos articles -->
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-light text-center text-lg-start mt-5">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Votre Site Web
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
