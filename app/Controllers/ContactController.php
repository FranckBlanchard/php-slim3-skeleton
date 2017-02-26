<?php

/** Controlleur pour la page de contact. */

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Controllers\Controller;

class ContactController extends Controller {

    public function getContact(Request $request, Response $response) {
        $this->container->view->render($response, 'contact/contact.html.twig', $this->container->metas);
    }

    public function PostContact(Request $request) {
        /** Récupération des données*/
        var_dump($request->getparams());
        
        /** Traitement des données */
        
        /** Envoi du courriel */
        
        /** Redirection et affichage d'un message d'information */
    }

}
