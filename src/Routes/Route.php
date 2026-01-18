<?php
namespace App\Routes;
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
        
    $path = strtok($_SERVER['REQUEST_URI'], '?');
    $method = $_SERVER['REQUEST_METHOD'];

    $path = str_replace('/S5-B1-MVC/public', '', $path);

    if ($path === '') {
        $path = '/';
    }

    if (isset($this->routes[$method][$path])) {
        $controllerClass = $this->routes[$method][$path]['controller'];
        $action = $this->routes[$method][$path]['action'];

        $controller = new $controllerClass();
        $controller->$action();
        exit;
    }

    require VIEW_PATH . '/errors/404.php';
    
    }




}

