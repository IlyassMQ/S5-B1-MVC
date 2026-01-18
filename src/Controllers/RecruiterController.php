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
            header('Location: /403');
            exit;
        }

        require __DIR__ . '/../../Views/recruiter/dashboard.php';
    }
}
