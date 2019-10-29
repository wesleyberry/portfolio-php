<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '/blogs' :
        require __DIR__ . '/views/blog.php';
        break;
    case '/blogs/coding_boot_camp_experience' :
        require __DIR__ . '/views/blogs/blog_1.php';
        break;
    case '/blogs/coding_boot_camp_worth_it' :
        require __DIR__ . '/views/blogs/blog_2.php';
        break;
    default:
        require __DIR__ . '/views/index.php';
        break;
}