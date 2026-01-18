<?php
namespace App\Controllers;
class CandidateController
{

    public function dashboard(){

        session_start();

        if (!isset($_SESSION['user'])){
            header('Location: /Login');
        }

        if ($_SESSION['user']['role']!== 1){
            require __DIR__ . '/../Views/errors/404.php';
            exit;
        }

        require __DIR__ . '/../Views/candidate/dashboard.php';

    }


}