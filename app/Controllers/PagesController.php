<?php

/**
 * PagesControllers.php
 * 
 * Controlleur pour les pages en générales.
 * 
 * @author Franck Blanchard
 * @copyright (c) 2017, Franck Blanchard 
 */

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Controllers\Controller;

/**
 * PagesControlleur
 * 
 * Controlleur pour les pages de l'application.
 */
class PagesController extends Controller {

    /**
     * Méthode pour la page d'accueil
     * @param Psr\Http\Message\RequestInterface $request objet Request
     * @param Psr\Http\Message\ResponseInterface $response objet Response
     */
    public function home(Request $request, Response $response) {

        /**
         * Appel de la methode render de notre controlleur
         */
        $this->render($response, 'home.html.twig', $this->container->metas);
    }

    /**
     * Méthode pour la page a propos
     * 
     * @param Psr\Http\Message\RequestInterface $request objet Request
     * @param Psr\Http\Message\ResponseInterface $response objet Response
     */
    public function about(Request $request, Response $response) {
        $this->render($response, 'about.html.twig', $this->container->metas);
    }

    public function test(Request $request, Response $response) {
        $this->render($response, 'test.html.twig', $this->container->metas);
    }

}
