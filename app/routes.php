<?php
/**
 * routes.php
 * 
 * Définitions des routes
 * Nous utilisons des controlleurs pour accéder à nos pages. 
 * 
 * @author Franck Blanchard
 * @copyright (c) 2017, Franck Blanchard
 */

/** 
 * Page d'accueil
 */
$app->get('/', \PagesController::class . ':home')->setName('home');

/** 
 * Pages de contact
 */
$app->get('/contact', \ContactController::class . ':getContact')->setName('contact');
$app->post('/contact', \ContactController::class . ':postContact');

/** 
 * Page A propos
 */
$app->get('/a-propos', \PagesController::class . ':about')->setName('about');

/**
 * Si l'application est en mode développement, on ajoute la route /test
 */
if ($configApp['mode'] == 'dev') {
    /** 
     * Page Test, cette route affiche des informations de configurations 
     */
    $app->get('/test', \PagesController::class . ':test')->setName('test');
}
