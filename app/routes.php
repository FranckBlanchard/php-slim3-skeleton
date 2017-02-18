<?php

/**
 * Définitions des routes
 */
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

/** Page d'accueil, avec fonction anonyme */
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'home.html.twig');
})->setName('home');

/** Pages utilisant des controlleurs*/

//$app->get('/contact', \App\Controllers\PagesControllers::class.':getcontact');

