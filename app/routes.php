<?php

/**
 * Définitions des routes
 */

/** Nous utilisons des controlleurs pour acceder à nos pages. */

/** Page d'accueil */
$app->get('/', \PagesController::class . ':home')->setName('home');

/** Pages de contact */
$app->get('/contact', \ContactController::class . ':getContact')->setName('contact');
$app->post('/contact', \ContactController::class . ':postContact');

/** Page A propos  */
$app->get('/a-propos', \PagesController::class . ':about')->setName('about');

/** Page Test, cette route n'est a utiliser qu'en développement, elle affiche les configurations*/
$app->get('/test',\PagesController::class .':test')->setName('test') ;
