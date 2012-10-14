<?php

require_once realpath(dirname(__DIR__)) . '/app/config/bootstrap.php';

$app->get('/.*', function() use ($app){
    echo 'Hello world!';
}); // END get(/.*)

$app->run();
