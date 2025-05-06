<?php
namespace App\Middleware;

class AuthMiddleware {
    
    public function handle() {
        $headers = getallheaders();

        $secretToken = getenv('SECRET_TOKEN');

        if (!isset($headers['Authorization']) || $headers['Authorization'] !== "Bearer " . (string)$secretToken) {
            http_response_code(401);
            echo json_encode(['message' => 'Unauthorized']);
            exit;
        }
    }

}

