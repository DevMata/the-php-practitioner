<?php

namespace App\Core;

class Router
{
    private $routes = [
        "GET" => [],
        "POST" => []
    ];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes["GET"][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes["POST"][$uri] = $controller;
    }


    public function direct($uri, $method): string
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->callToAction(...explode('@', $this->routes[$method][$uri]));
        }

        throw new Exception("No route");
    }

    protected function callToAction($controller, $action)
    {
        $controller = new $controller;
        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} controller does not respond to {$action} action");
        }

        return $controller->$action();
    }
}