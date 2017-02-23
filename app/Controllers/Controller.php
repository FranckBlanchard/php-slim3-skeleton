<?php

namespace App\Controllers;

class Controller {

    protected $container;
    protected $metas;

    public function __construct($container) {
        $this->container = $container;
    }

}
