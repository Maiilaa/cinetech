<?php
// namespace src\Controllers;
namespace MvcProject\Controllers;

use MvcProject\Views\View; // Si tu utilises View dans ton contrôleur


class HomeController {
    public function index() {
        $view = new View();
        $view->render('home', ['title' => 'Bienvenue sur mon site MVC !']);
    }
}
