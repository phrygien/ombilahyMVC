<?php

require_once __DIR__ . '/../vendor/autoload.php';
use ombilahy\core\Application;

$app = new Application();

$app->router->get('/', function (){
    return 'Tongasoa';
});

$app->router->get('/contact', function (){
    return 'Contact';
});


$app->run();