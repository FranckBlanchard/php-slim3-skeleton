<?php

namespace App\Controllers;

class Controller {

    private $container;

    public function __construct($container) {
        $this->container = $container;
    }
/**
    public function __get($key) {
        if ($this->container->{$key}) {
            return $this->container->{$key};
        }
    }
*/
}