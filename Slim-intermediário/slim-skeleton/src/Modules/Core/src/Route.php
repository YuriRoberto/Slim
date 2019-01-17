<?php 

namespace SonSlim\Core;

use Slim\App;

abstract class Route {

    protected $app;

    public function __construct(App $app){
        $this->app = $app;
    }

}

