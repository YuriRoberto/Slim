<?php 

namespace SonSlim\Core\Controllers;

abstract class ControllerAbstract {

    protected $c;

    public function __construct(Container $c){
        $this->c = $c;
    }

}

