<?php

$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
// $pathTemplates = require __DIR__ . '/../templates/pages/';

if ($path !== '/') {
    $path = rtrim($path, '/');
}

switch ($path) {
    case '/':
        require __DIR__ . '/../templates/pages/home.php';
        break;
    case '/about':
        require __DIR__ . '/../templates/pages/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../templates/pages/404.php';
        break;
}
