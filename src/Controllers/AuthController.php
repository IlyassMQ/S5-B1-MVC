<?php

namespace App\Controllers;
use App\Config\Database;
use App\Repositories\UserRepository;
use App\Services\AuthService;

class AuthController
{
    private AuthService $authService;

     public function __construct()
    {
        $pdo = (new Database())->connect();
        $userRepo = new UserRepository($pdo);
        $this->authService = new AuthService($userRepo);
    }


    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $result = $this->authService->register($_POST);

            if ($result) {
                header('Location: /S5-B1-MVC/public/login');
            exit;
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
        require __DIR__ . '/../Views/auth/register.php';
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
                switch ($user['role_id']) {
                    case 1:
                        header('Location: /S5-B1-MVC/public/candidate/dashboard');
                        break;
                    case 2:
                        header('Location: /S5-B1-MVC/public/recruiter/dashboard');
                        break;
                    case 3:
                        header('Location: /S5-B1-MVC/public/admin/dashboard');
                        break;
                }
                exit;
            }
        }

        require __DIR__ . '/../Views/auth/login.php';
    }



    public function logout(): void
    {
        session_start();
        session_destroy();

        header('Location: /S5-B1-MVC/public/login');
        exit;
    }
}
