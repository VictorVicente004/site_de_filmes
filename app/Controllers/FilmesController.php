<?php
require_once __DIR__ . "/../../config/config.php";

class FilmesController {
    public function buscarFilmes($query) {
        // Construção da URL para fazer a consulta na API do TMDB
        $url = TMDB_BASE_URL . "search/movie?api_key=" . TMDB_API_KEY . "&query=" . urlencode($query) . "&language=pt-BR";
        
        $response = file_get_contents($url);
        return json_decode($response, true);  // Retorna o resultado decodificado da API
    }
}
?>
