<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class PagesControllers extends Controller {

    public function home(Request $request, Response $response) {
//        $response->getBody()->write('Accueil');
    }

    public function getContact(Request $request, Response $response) {

//        $response->getBody()->write('Contact');
        $this->container->view->render($response, 'home.html.twig');
    }

}
