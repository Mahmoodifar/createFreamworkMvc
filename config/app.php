<?php

define('APP_TITLE', 'mvc project');

define('BASE_URL', 'http://localhost:8000');

define('BASE_DIR', realpath(__DIR__ . "/../"));

$temperary = str_replace(BASE_URL, '', explode('?', $_SERVER['REQUEST_URI'])[0]);
$temperary === '/' ? $temperary = "" : substr($temperary, 1);
define('CURRENT_ROUTE', $temperary);

global $routes;
$routes = [
    'get' => [],
    'post' => [],
    'put' => [],
    'delete' => [],
];
