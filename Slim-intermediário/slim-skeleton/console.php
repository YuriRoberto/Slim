#!/usr/bin/env php
<?php 

require __DIR__.'/autoload.php';

use \Symfony\Component\Console\Application;

$application = new Application;

$application->add();

$application->run();



