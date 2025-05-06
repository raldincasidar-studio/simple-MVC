<?php
namespace App\Controllers;

use App\Services\EndpointService;
use App\Core\Response;

class EndpointController {
    public function endpoint($request) {
        $endpointService = new EndpointService();
        $response = $endpointService->exec($request);
        return Response::json([
            'status' => 'success',
            'data'=> $response

        ]);   
    }
}
