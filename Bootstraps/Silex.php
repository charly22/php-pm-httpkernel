<?php

namespace PHPPM\Bootstraps;

use PHPPM\Bootstraps\BootstrapInterface;
use Silex\Application;

class Silex implements BootstrapInterface
{

    /**
     * @return Application
     */
    public function getApplication()
    {
        return require './app/bootstrap.php';
    }

}
