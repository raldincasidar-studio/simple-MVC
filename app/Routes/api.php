<?php
use App\Controllers\EndpointController;
use App\Middleware\AuthMiddleware;


// Endpoints
$router->post('/endpoint', [EndpointController::class, 'endpoint'], [AuthMiddleware::class]);