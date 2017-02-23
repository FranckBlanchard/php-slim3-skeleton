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

/** Initialisation des données metas pour nos pages */
$container['metas']=[
    'title'=>'S3S',
    'description'=>'Une application web minimale avec le micro-framework Slim3.',
    'keywords'=>'slim3, micro-framework'
    ];
/** Initialisation du controlleur PagesControllers */
$container['PagesControllers'] = function ($container) {
    return new App\Controllers\PagesControllers($container);
};