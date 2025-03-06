<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
    <nav>
        <div class="container">
            <h1>Filmes</h1>
            <div class="search-bar">
                <!-- Formulário agora envia para filmes.php -->
                <form action="../app/Views/filmes.php" method="GET">
                    <input type="text" name="q" placeholder="Buscar filmes..." required>
                    <button type="submit">🔍</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
        <h2>Bem-vindo ao site de filmes!</h2>
        <p>Busque por filmes para começar.</p>
    </div>
</main>

<footer>
    <div class="container">
    <p>&copy; 2025 - www.busquefilmes.com</p>
    </div>
</footer>
</body>
</html>
