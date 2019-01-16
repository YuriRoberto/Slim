<?php

namespace SonSlim\Modules\Migrations\src\Commands;

use Phinx\Command\SeedCreate;

class SeedCreateCommand extends SeedCreate {

    protected function configure (){

        parent::configure();
        $this->setName('migration:seed:create');

    }

}
