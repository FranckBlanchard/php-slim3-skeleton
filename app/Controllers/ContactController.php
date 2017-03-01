<?php

/**
 * ContactController.php
 * 
 * Controlleur pour la page de contact.
 *  
 * @author Franck Blanchard
 * @copyright (c) 2017, Franck Blanchard
 */

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Controllers\Controller;

/**
 * ContactControleur
 * 
 * Controlleur pour la gestion du formulaire de contact.
 */
class ContactController extends Controller {

    /**
     * La méthode getContact gère l'affichage du formulaire, et fournie les parametres metas a la page.
     * 
     * @param Request $request
     * @param Response $response
     */
    public function getContact(Request $request, Response $response) {
        $this->render($response, 'contact/contact.html.twig', $this->container->metas);
    }

    /**
     * La méthode postContact gère la reception du formulaire et l'envoie de l'email.
     * 
     * @param Request $request
     * @param Response $response
     */
    public function postContact(Request $request, Response $response) {
        /** Récupération des données */
        $data = $request->getParams();
        /**
         * Traitement des données
         */
        /**
         *  Envoi du courriel
         */
        /**
         * Redirection et affichage d'un message d'information
         * en fonction du resultat de l'envoie du courriel
         */
        //   return $response->withStatus(200)->withHeader(location, '/');
    }

}
