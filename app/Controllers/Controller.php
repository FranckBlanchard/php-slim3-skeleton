<?php

namespace App\Controllers;

class Controller {

    protected $container;
    protected $metas;

    public function __construct($container) {
        $this->container = $container;
    }

    public function render(Response $response, $file, $param = []) {
        $this->container->view->render($response, $file, $param);
    }

}
