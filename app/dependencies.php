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
    'description'=>'S3S est une application web minimale basé sur le micro-framework Slim3.',
    'keywords'=>'slim3, micro-framework',
    'autor'=>'Franck Blanchard'
    ];

/** Initialisation du controlleur PagesControllers */
$container['PagesController'] = function ($container) {
    return new App\Controllers\PagesController($container);
};

/** Initialisation du controlleur de page ContactController */
$container['ContactController']=  function ($container){
    return new App\Controllers\ContactController($container);
};