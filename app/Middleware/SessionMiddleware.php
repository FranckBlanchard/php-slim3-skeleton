<?php

/**
 * SessionMiddleware.php
 * 
 * Middleware chargé de démarrer la session.
 * 
 * @author Franck Blanchard
 * @copyright (c) 2017, Franck Blanchard
 * 
 */

namespace App\Middleware;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * SessionMiddleware
 * Cette classe est chargée de démarrer une session a chaque appel d'une page.
 * 
 * @author Franck Blanchard
 * @copyright (c) 2017, Franck Blanchard
 * 
 */
class SessionMiddleware {
    
    /**
     * Constructeur
     */

    public function __construct() {
        
    }

    /**
     * Appel du middleware
     *
     * @param  RequestInterface $request  PSR7 request object
     * @param  ResponseInterface $response PSR7 response object
     * @param  callable          $next     Next middleware callable
     *
     * @return ResponseInterface PSR7 response object
     */
    public function __invoke(Request $request, Response $response, callable $next) {
        
        /**
         *  Démarrage de la session.
         */
        $this->startSession();
        
        return $next($request, $response);
        
    }

    /**
     * startSession démarre la session
     */
    public function startSession() {
        /**
         * Démarrage de la session
         */
        session_start();
    }

}
