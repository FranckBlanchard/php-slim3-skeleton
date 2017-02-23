<?php

return [

    'settings' => [
        /** Permet a Slim d'afficher les erreurs. Mettre a true pour le développement
         * et a false pour la production */
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

