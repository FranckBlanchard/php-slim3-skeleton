<?php

/** Récupération du container */
$container = $app->getContainer();

/** Twig view dependency */
$container['view'] = function ($container) {

    $cf = $container->get('settings')['view'];

    $view = new \Slim\Views\Twig($cf['path'], $cf['twig']);

    $view->addExtension(new \Slim\Views\TwigExtension(
            $container->router, $container->request->getUri()
    ));

    return $view;
};
