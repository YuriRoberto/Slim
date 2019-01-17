<?php 

namespace SonSlim\Authentication;

class Route extends \SonSlim\Core\Route {

    public function create() {
        
        $this->app->get('\login', function() {
            $this->app->get('login', AuthenticationController::class . ':login');
        });

    }

}

