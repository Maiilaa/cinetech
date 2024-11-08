<?php

namespace Controllers;

class UserController {
    public function showRegisterForm() {
        /*require_once __DIR__ . '/../Views/templates/register.php';*/
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            if ($password !== $confirmPassword) {
                $error = "Les mots de passe ne correspondent pas.";
                require_once __DIR__ . '/../Views/templates/register.php';
                return;
            }

            header('Location: /index.php?action=success');
            exit;
        }
    }
}
