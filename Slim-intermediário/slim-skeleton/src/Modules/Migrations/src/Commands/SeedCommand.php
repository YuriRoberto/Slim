<?php 

namespace SonSlim\Modules\Migrations\src\Commands;

use Phinx\Console\Command\SeedRun;

class SeedCommand extends SeedRun {

    protected function configure(){
        parent::configure();
        $this->setName('migration:seed:run');
    }

}

