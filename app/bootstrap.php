<?php

/**
 * bootstrap.php
 *
 * Ce fichier est chargé d'initialisé l'application.
 *
 * @author Franck Blanchard
 * @copyright 2017 Franck Blanchard
 * 
 */

namespace App;

use Slim\App;
use Symfony\Component\Yaml\Yaml;

/**
 * @var string chemin vers le répertoire des fichiers de configuration.
 */
$configPath = __DIR__ . '/Config/';

/**
 * Chargement de l'autoloader 
 */
require __DIR__ . '/../vendor/autoload.php';

//$settings = require __DIR__ . '/settings.php';

/**
 * Récupération des données de l'application.
 */
/**
 * @var string Fichier de configuration de l'application
 */
$file = $configPath . 'app.yml';
/**
 * @var array Tableau contenant des variables de configurations
 */
$configApp = Yaml::parse(file_get_contents($file));
/**
 * Chargement des réglages de l'application en fonction du mode de fonctionnement définit dans
 * le fichier app/Config/app.yml
 */
if ($configApp['mode'] == 'dev') {
    ini_set("display_errors", 1);
    $settings = require __DIR__ . '/settings.dev.php';
} else {
    $settings = require __DIR__ . '/settings.prod.php';
}

/**
 * Création de l'instance Slim  
 */
$app = new App($settings);

/**
 * Ajout du middleware SessionMiddleware
 */
$app->add(new \App\Middleware\SessionMiddleware());

/**
 * Initialisation des dépendances de l'application
 */
require __DIR__ . '/dependencies.php';

/**
 * Initialisation des routes de l'application
 */
require __DIR__ . '/routes.php';
