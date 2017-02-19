<?php

/**
 * Définitions des routes
 */
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Controllers\PagesControllers;

/** Page d'accueil, avec fonction anonyme */
$app->get('/', function (Request $request, Response $response, $args) {
    return $this->view->render($response, 'home.html.twig');
})->setName('home');

/** Page contact, avec fonction anonyme */
$app->get('/contact', function ($request, $response, $args) {
    return $this->view->render($response, 'contact.html.twig');
})->setName('contact');

/** Pages utilisant des controlleurs */
$app->get('/a-propos', \PagesControllers::class . ':about')->setName('about');

