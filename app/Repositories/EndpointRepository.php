<?php
namespace App\Repositories;

use PDO;
use App\Core\Database;

class EndpointRepository {
    public function exec($data) {
        try {
            $db = Database::getInstance();
            
            // !TODO = Validate $data['action']
            $action = $data["action"]; 
            $stmt = $db->prepare("SELECT $action(:data) as result"); // naa ni security risk!!!!
            // var_dump($data);
            $stmt->execute([
                'data'   =>     json_encode($data['data']) 
            ]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // print_r($result['result']);
            return json_decode($result['result'], true);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }
}

