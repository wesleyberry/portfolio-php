<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '/blog' :
        require __DIR__ . '/views/blog.php';
        break;
    default:
        require __DIR__ . '/views/index.php';
        break;
}