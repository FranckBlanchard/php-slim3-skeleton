<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\Controllers\Controller;

class PagesControllers extends Controller {

    public function home(Request $request, Response $response) {
        $this->container->view->render($response, 'home.html.twig', $this->container->metas);
    }

    public function getContact(Request $request, Response $response) {
        $this->container->view->render($response, 'contact.html.twig', $this->container->metas);
    }

    public function about(Request $request, Response $response) {
        $this->container->view->render($response, 'about.html.twig', $this->container->metas);
    }

}
