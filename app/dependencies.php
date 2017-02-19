<?php

/** Récupération du container */
$container = $app->getContainer();

/** Initialisation des dépendances de Twig view */
$container['view'] = function ($container) {

    $cf = $container->get('settings')['view'];

    $view = new \Slim\Views\Twig($cf['path'], $cf['twig']);

    $view->addExtension(new \Slim\Views\TwigExtension(
            $container->router, $container->request->getUri()
    ));

    return $view;
};
/** Initialisation du controlleur PagesControllers */
$container['PagesControllers'] = function ($container) {
    return new App\Controllers\PagesController($container);
};