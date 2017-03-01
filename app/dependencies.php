<?php

/**
 * dependencies.php
 * 
 * Ce fichier initialise les dépendances de l'application.
 * 
 * @author Franck Blanchard
 * @copyright 2017 Franck Blanchard
 */
/**
 * @var objet container de Slim
 */
$container = $app->getContainer();

/**
 * Initialisation des dépendances de Twig view 
 */
$container['view'] = function ($container) {

    $cf = $container->get('settings')['view'];

    $view = new \Slim\Views\Twig($cf['path'], $cf['twig']);

    $view->addExtension(new \Slim\Views\TwigExtension(
            $container->router, $container->request->getUri()
    ));

    return $view;
};

/**
 * Initialisation des données metas pour nos pages 
 */
$container['metas'] = $configApp['metas'];

/**
 * Initialisation du controlleur de page PagesControllers 
 */
$container['PagesController'] = function ($container) {
    return new App\Controllers\PagesController($container);
};

/** 
 * Initialisation du controlleur de page ContactController 
 */
$container['ContactController'] = function ($container) {
    return new App\Controllers\ContactController($container);
};
