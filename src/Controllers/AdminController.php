<?php
namespace App\Controllers;
class AdminController
{

    public function dashboard ()
    {
        session_start();

        if(!isset($_SESSION['user'])){
            header('Location: /login');
            exit;
        }
         if ($_SESSION['user']['role'] !== 3) {
            require __DIR__ . '/../Views/errors/404.php';
            exit;
        }

        require __DIR__ . '/../../Views/admin/dashboard.php';

    }
    

}