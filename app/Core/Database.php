<?php
namespace App\Core;

use PDO;

class Database {
    private static $instance = null;

    public static function getInstance() {
        if (self::$instance === null) {

            // @note: Credentials from environment variables
            $host       =   getenv('DB_HOST');
            $db         =   getenv('DB_NAME');
            $user       =   getenv('DB_USER');
            $pass       =   getenv('DB_PASS');
            $charset    =   'utf8mb4';


            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            self::$instance = new PDO($dsn, $user, $pass);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}

