<?php

namespace App\Controllers;

class RecruiterController
{
    public function dashboard(): void
    {
        session_start();

        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }

        if ($_SESSION['user']['role'] !== 2) {
            require __DIR__ . '/../Views/errors/404.php';
            exit;
        }

        require __DIR__ . '/../Views/recruiter/dashboard.php';
    }
}
