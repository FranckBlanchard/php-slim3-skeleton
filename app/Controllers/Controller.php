<?php
/**
 * Controller.php
 * 
 * Controller générique pour les pages.
 * 
 * @author Franck Blanchard
 * @copyright (c) 2017, Franck Blanchard
 */

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
/**
 * @method render methodName(type $paramName) Description
 */
class Controller {

    protected $container;
    protected $metas;

    public function __construct($container) {
        $this->container = $container;
    }

    /**
     * Méthode render 
     * 
     * Cette méthode appele la méthode render de la classe twig/view, afin de faciliter l'écriture. 
     * 
     * @param Response $response objet Psr\Http\Message\ResponseInterface. 
     * @param string $file Nom du fichier de la vue a appeler.
     * @param array $param Tableau de paramètres a transmettre a la vue.
     */
    public function render(Response $response, $file, $param = []) {
        $this->container->view->render($response, $file, $param);
    }

}
