<?php
require_once __DIR__ . "/../../app/Controllers/FilmesController.php";

// Recebe a busca realizada pelo usuário
$searchQuery = isset($_GET['q']) ? $_GET['q'] : '';

$controller = new FilmesController();
$filmes = $controller->buscarFilmes($searchQuery);  // Passa a consulta para buscar os filmes

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes - Resultados</title>
    <link rel="stylesheet" href="../../public/css/filmes.css">
    </head>
<body>
<header>
    <nav>
        <div class="container">
            <h1>Filmes</h1>
            <div class="search-bar">
                <form action="filmes.php" method="GET">
                    <input type="text" name="q" value="<?= htmlspecialchars($searchQuery) ?>" placeholder="Buscar filmes...">
                    <button type="submit">🔍</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <h2>Resultados da Busca para: "<?= htmlspecialchars($searchQuery) ?>"</h2>
        <div class="movies-grid">
            <?php if (!empty($filmes['results'])): ?>
                <?php foreach ($filmes['results'] as $filme): ?>
                    <div class="movie-card">
                        <!-- Exibe a imagem do filme -->
                        <img src="<?= TMDB_IMAGE_BASE_URL . $filme['poster_path'] ?>" alt="<?= $filme['title'] ?>" style="width: 200px; height: auto;">

                        <!-- Exibe o nome do filme e o ano -->
                        <h3><?= $filme['title'] ?> (<?= substr($filme['release_date'], 0, 4) ?>)</h3>

                        <!-- Exibe a sinopse -->
                        <p><strong>Sinopse:</strong> <?= !empty($filme['overview']) ? $filme['overview'] : 'Não disponível.' ?></p>

                        <!-- Exibe a data de lançamento -->
                        <p><strong>Data de Lançamento:</strong> <?= date("d/m/Y", strtotime($filme['release_date'])) ?></p>

                        <!-- Exibe a nota no TMDB -->
                        <p><strong>Nota:</strong> <?= !empty($filme['vote_average']) ? $filme['vote_average'] : 'Não disponível.' ?>/10</p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum filme encontrado.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; 2025 - www.busquefilmes.com</p>
    </div>
</footer>
</body>
</html>
