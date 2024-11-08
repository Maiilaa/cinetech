<?php
// namespace src\Controllers;
namespace MvcProject\Controllers;

use MvcProject\Views\View; // Si tu utilises View dans ton contrôleur

class HomeController {
    public function index() {
        $apiKey = 'c574cdceb206846f47a05280db742705';  
        $movies = $this->fetchPopularMovies($apiKey);

        $view = new View();
        $view->render('home', [
            'title' => 'Films du moment ',
            'movies' => $movies
        ]);
    }

    private function fetchPopularMovies($apiKey) {
        $url = "https://api.themoviedb.org/3/movie/now_playing?api_key=$apiKey&language=fr-FR";
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        
        return $data['results'] ?? [];
    }
}


