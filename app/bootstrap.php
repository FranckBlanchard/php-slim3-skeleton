<?php

namespace App;

/**
 *  Configuration et initialisation de l'application Slim.
 *
 */
ini_set('display_errors', true);

/** Chargement de l'autoloader */
require __DIR__ . '/../vendor/autoload.php';

use Slim\App;

/** Chargement des réglages de l'application */
$settings = require __DIR__ . '/settings.php';

/** Création de l'instance Slim  */
$app = new App($settings);

/** Initialisation des dépendances */
require __DIR__ . '/dependencies.php';

/** Initialisation des routes */
require __DIR__ . '/routes.php';
