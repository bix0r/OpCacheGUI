<?php

$router->get('mainjs', function() {
    header('Content-Type: application/javascript');
    readfile(__DIR__ . '/public/js/main.js');
    exit;
});

/** @var \OpCacheGUI\Presentation\Url $urlRenderer */
$router->get('maincss', function() use ($urlRenderer) {
    header('Content-Type: text/css');

    $prefix = $urlRenderer->get('');

    echo str_replace('{urltype}', $prefix, file_get_contents(__DIR__ . '/public/style/main.css'));
    exit;
});

$router->get('fontawesome-webfont_eot', function() {
    header('Content-Type: application/vnd.ms-fontobject');
    readfile(__DIR__ . '/public/style/fonts/fontawesome-webfont.eot');
    exit;
});

$router->get('fontawesome-webfont_woff', function() {
    header('Content-Type: font/x-woff');
    readfile(__DIR__ . '/public/style/fonts/fontawesome-webfont.woff');
    exit;
});

$router->get('fontawesome-webfont_ttf', function() {
    header('Content-Type: font/ttf');
    readfile(__DIR__ . '/public/style/fonts/fontawesome-webfont.ttf');
    exit;
});

$router->get('fontawesome-webfont_svg', function() {
    header('Content-Type: image/svg+xml');
    readfile(__DIR__ . '/public/style/fonts/fontawesome-webfont.svg');
    exit;
});
