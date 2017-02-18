# php-slim3-skeleton

## Description

php-slim3-skeleton est le squelette d'une application web minimale, construit autour du micro-framework Slim3.

Une fois installé, l'exploration du code est très simple, et est commenté. 

## Installation

    Créer un dossier pour votre projet.
    Récupération de l'archive à l'adresse :[https://github.com/FranckBlanchard/php-slim3-skeleton](https://github.com/FranckBlanchard/php-slim3-skeleton "Télécharger php-slim3-skeleton")
    Décompresser l'archive dans le dossier de votre projet.        
    Faire un *composer update* : met à jour Slim3 et toutes ses dépendance.
    Démarrer le serveur de php avec la commande suivante : php" "-S" "localhost:8080" "-t" "public".
    Démarrer votre navigateur avec la commande : http://localhost:8080/.

## Personalisation

    *app/dependencies.php* contient les définitions a charger.  
    *app/routes.php* contient la définition de toutes les routes.  
    *app/settings.php* contient les options de l'application.  

## Structure des répertoires

*app/Controllers*

Dossier des controlleurs de l'application

*app/Views/*

Dossier contenants les différentes vues de l'application

*app/Config*

Dossier contenants les fichiers de configurations pour l'application

*public*

Dossier public ou pointera le serveur.

## A faire

    Ajouter des commentaires au code.
    Utiliser des controlleurs pour les routes.
    Améliorer la documentation.