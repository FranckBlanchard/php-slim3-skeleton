<?php

/**
 * Définitions des routes
 */
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


/** Nous utilisont des controlleurs pour nos pages*/
$app->get('/', \PagesControllers::class . ':home')->setName('home');
$app->get('/contact', \PagesControllers::class . ':getcontact')->setName('contact');
$app->get('/a-propos', \PagesControllers::class . ':about')->setName('about');

