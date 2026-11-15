<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
set_error_handler(function (int $no, string $str, string $file, int $line) {
    throw new ErrorException($str, 0, $no, $file, $line);
});

require __DIR__ . '/../src/data.php';
require __DIR__ . '/../src/helpers.php';

$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_PATH);
// $pathTemplates = require __DIR__ . '/../templates/pages/';

if ($path !== '/') {
    $path = rtrim($path, '/');
}

switch ($path) {
    case '/':
        render('home', 'Главная страница');
        break;
    case '/about':
        render('about', 'О блоге');
        break;
    default:
        http_response_code(404);
        render('404', 'Страница не найдена');
        break;
}
