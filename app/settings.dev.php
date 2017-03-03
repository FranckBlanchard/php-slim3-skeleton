<?php

/**
 * setting.dev.php
 * 
 * Options de configuration en mode développement, de Slim3
 * 
 * @author Franck Blanchard
 * @copyright (c) 2017, Franck Blanchard
 */
return [

    'settings' => [
        /**
         * Permet a Slim d'afficher les erreurs. 
         * et a false pour la production
         */
        'displayErrorDetails' => true,
        /**
         * Initialisation de la configuration de Twig/view
         */
        'view' => [
            'path' => __DIR__ . '/Views',
            'twig' => [
                'cache' => false
            ]
        ]
    ]
];

