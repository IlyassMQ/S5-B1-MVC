<?php
namespace App\core;

class Route {

    private $routes =[];

    private function addRoute($route, $controller, $action, $method)
    {

        $this->routes[$method][$route] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function get($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "GET");

    }
    public function post($route, $controller, $action)
    {
        $this->addRoute($route, $controller, $action, "POST");

    }
    public function dispatch()
    {
        $path = strtok($_SERVER['REQUEST_URI'], "?");
        $method = $_SERVER['REQUEST_METHOD'];
        
        
        $path = str_replace("/S5-B1-MVC", "", $path);
        if ($path === ''){
                $path = '/';
        }
     
        if (array_key_exists($path, $this->routes[$method])) {
            $controller = $this->routes[$method][$path]['controller'];
            $action = $this->routes[$method][$path]['action'];
            $controller = new $controller();
            $controller->$action();
            exit;
        } else {
            require_once '/../Views/errors/404.php';
        }
    }



}

