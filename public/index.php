<?php
// require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Core/bootstrap.php';

use App\Core\Router;
use App\Core\Env;

Env::load();

$router = new Router();
require __DIR__ . '/../app/Routes/api.php';
$router->resolve( $_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
