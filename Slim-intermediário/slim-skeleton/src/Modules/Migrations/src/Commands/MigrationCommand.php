<?php 

namespace SonSlim\Modules\Migrations\src\Commands;

use Phinx\Console\Command\Migrate;

class MigrationCommand extends Migrate {

    protected function configure(){

        parent::configure();
        $this->setName('migration:run');
        
    }

}
