<?php

require_once('store.php');

require_once('header.php');


$sections = [
    'intro',
    'catalog',
    'about',
    'latest-news'
];

foreach ($sections as $section) {
    include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('footer.php');