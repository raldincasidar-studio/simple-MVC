<?php
namespace App\Core;

class Router {
    private $routes = [];

    public function post($uri, $action, $middleware = []) {
        $this->routes['POST'][$uri] = ['action' => $action, 'middleware' => $middleware];
    }

    public function get($uri, $action, $middleware = []) {
        $this->routes['GET'][$uri] = ['action' => $action, 'middleware' => $middleware];
    }

    public function resolve($uri, $method) {
        $uri = strtok($uri, '?');
        $route = $this->routes[$method][$uri] ?? null;

        if (!$route) {
            http_response_code(404);
            echo json_encode(['message' => 'Oops. route not found.', 'route' => $uri]);
            return;
        }

        // Run middleware
        foreach ($route['middleware'] as $middlewareClass) {
            $middleware = new $middlewareClass();
            $middleware->handle();
        }

        [$class, $method] = $route['action'];
        $controller = new $class();
        $data = json_decode(file_get_contents('php://input'), true);
        echo $controller->$method($data);
    }
}
