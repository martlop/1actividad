<?php

require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app->get('/clima', function() use($app){
    $client = new Client();
    $url = "http://api.openweathermap.org/data/2.5/weather?id=3516109&appid=fa06d9a55254e3cd40c9c9647876cfa3&units=metric";
    $response = $client -> get($url);
    $body = $response->getBody();

    return new Response($body,200,array('Content-type'=> 'application/json'));

});

$app->run();
