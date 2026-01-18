<?php
define('VIEW_PATH', realpath(__DIR__ . '/../src/Views'));

require __DIR__ . '/../vendor/autoload.php';

use App\Routes\Route;
use App\Controllers\AuthController;
use App\Controllers\AdminController;
use App\Controllers\CandidateController;
use App\Controllers\RecruiterController;

$router = new Route();
$router->get('/', AuthController::class, 'login');

$router->get('/login', AuthController::class, 'login');
$router->post('/login', AuthController::class, 'login');

$router->get('/register', AuthController::class, 'register');
$router->post('/register', AuthController::class, 'register');

$router->get('/logout', AuthController::class, 'logout');

$router->get('/candidate/dashboard', CandidateController::class, 'dashboard');
$router->get('/recruiter/dashboard', RecruiterController::class, 'dashboard');
$router->get('/admin/dashboard', AdminController::class, 'dashboard');

$router->dispatch();
