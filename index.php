<?php

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ceil($length / strlen($x)))), 1, $length);
}

require_once('store.php');

require_once('views/base/header.php');


$sections = [
    'intro',
    'catalog',
    'about',
    'latest-news'
];

foreach ($sections as $section) {
    include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('views/base/footer.php');