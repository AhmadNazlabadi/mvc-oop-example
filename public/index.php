<?php
use Core\Config;
use Database\DB;
require '../Core/init.php';
require '../vendor/autoload.php';
require '../routes/web.php';
$url = $_SERVER['QUERY_STRING'];

DB::getInstance();
DB::getInstance();
DB::getInstance();
DB::getInstance();
DB::getInstance();
/** @var Core\Router $router */
$router->dispatch($url);


















