<?php

namespace App\Controllers;

use App\Services\AuthService;

class AuthController
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }


    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->authService->register($_POST);

            if ($result) {
                header('Location: /login');
                exit;
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
        require __DIR__ . '/../../views/auth/register.php';
    }



    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->authService->login($email, $password);

            if (!$user) {
                $error = "Invalid email or password";
            } else {
                session_start();

                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'role' => $user['role_id']
                ];

                header('Location: /dashboard');
                exit;
            }
        }

        require __DIR__ . '/../../views/auth/login.php';
    }



    public function logout(): void
    {
        session_start();
        session_destroy();

        header('Location: /login');
        exit;
    }
}
