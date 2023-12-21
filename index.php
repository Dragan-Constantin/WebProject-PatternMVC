<?php
use Dotenv\Dotenv;

require __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
require_once('./router.php');
$address = $_SERVER['REQUEST_URI'];
route_request($address);