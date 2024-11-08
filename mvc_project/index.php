<?php

require_once __DIR__ . '/vendor/autoload.php'; // Inclure l'autoloader de Composer

use MvcProject\Controllers\HomeController; // Utiliser le bon namespace

// Instancier le contrôleur
$controller = new HomeController();
$controller->index();

/*require_once __DIR__ . '/src/Controllers/UserController.php';*/

use Controllers\UserController;

$controller = new UserController();
$action = $_GET['action'] ?? null;

if ($action === 'register') {
    $controller->showRegisterForm();
} elseif ($action === 'submit_register') {
    $controller->register();
} else {
    echo "Page d'accueil ou erreur de route.";
}
