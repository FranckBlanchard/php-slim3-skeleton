<?php
/** Controlleur pour les pages en générales. */
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Controllers\Controller;

class PagesController extends Controller {

    public function home(Request $request, Response $response) {
        $this->container->view->render($response, 'home.html.twig', $this->container->metas);
    }

    public function getContact(Request $request, Response $response) {
        $this->container->view->render($response, 'contact/contact.html.twig', $this->container->metas);
    }

    public function PostContact(Request $request) {
        var_dump($request->getparams());
        /** Traitement des données */
        
        /** Envoi du courriel */
        
        /** Redirection et affichage d'un message d'information*/
    }

    public function about(Request $request, Response $response) {
        $this->container->view->render($response, 'about.html.twig', $this->container->metas);
    }

    public function test(Request $request, Response $response) {
        $this->container->view->render($response, 'test.html.twig', $this->container->metas);
    }

}
