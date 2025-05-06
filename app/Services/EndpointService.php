<?php
namespace App\Services;

// use App\Repositories\UserRepository;
use App\Repositories\EndpointRepository;

class EndpointService {
    public function exec($data) {
        $endpointRepo = new EndpointRepository();
        return $endpointRepo->exec($data);
    }
}
