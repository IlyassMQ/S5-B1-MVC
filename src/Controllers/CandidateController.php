<?php

class CandidateController
{

    public function dashboard(){

        session_start();

        if (!isset($_SESSION['user'])){
            header('Location: /Login');
        }

        if ($_SESSION['user']['role']!== 1){
            header('Location: /404');
            exit;
        }

        require __DIR__ . '/../../Views/candidate/dashboard.php';

    }


}