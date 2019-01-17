<?php

require '../../vendor/autoload.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

$app->get('/', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write(
        "<!DOCTYPE html>"
        . "<html class=\"wf-brandongrotesque-n7-active wf-brandongrotesque-n3-active wf-active\">"
        . "<head>"
        . "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/all.css\">"
        . "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>"
        . "<link rel=\"shortcut icon\" href=\"images/favicon.png\"/>"
        . "</head>"
        . "<body>"
        . "<header class=\"site-header\">"
        . "<div class=\"site-title\">"
        . "<a href=\"http://www.slimframework.com/\">Slim</a>"
        . "</div>"
        . "<p class=\"site-slogan\">"
        . "Welcome to the Slim Framework Skeleton Application!"
        . "</p>"
        . "</header>"
        . "</body>"
        . "</html>"
    );

    return $response;
});

$app->run();
