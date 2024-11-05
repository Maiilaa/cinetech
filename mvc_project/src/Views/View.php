<?php
namespace MvcProject\Views;

class View {
    public function render($viewName, $data = []) {
        extract($data); // Permet d'extraire les variables dans la portée locale
        include __DIR__ . "/templates/$viewName.php"; // Charge la vue correspondante
    }
}