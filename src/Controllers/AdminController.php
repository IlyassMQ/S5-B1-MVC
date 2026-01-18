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
            header('Location: /404');
            exit;
        }

        require __DIR__ . '/../../Views/admin/dashboard.php';

    }
    

}